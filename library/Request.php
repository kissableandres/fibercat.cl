<?php
/** 
* @Recepción de Peticiones del Usuario. "Request.php"
* @versión: 1.0.0      @modificado: 14 de Febrero del 2015
* @autor: Marcelo.
*
* Este archivo contiene métodos que permiten realizar multiples cosas.
*/
class Request{

	protected $url;
	protected $globalParams;
	protected $controller;
	protected $action;
	protected $params;

	public function __construct($globalParams)
	{
		//	Cargamos cada uno de los parámetros de config.
		$this -> globalParams = $globalParams;
		$this -> url = $globalParams['get'];
		

		//	Obtenemos los segmentos de la url.
		$segments = explode('/', $this -> getUrl());
		
		$this -> resolveController($segments);
		$this -> resolveAction($segments);
		$this -> resolveParams($segments);
	}

	//	Obtiene la url del navegador.
	public function getUrl()
	{
		return $this -> url;
	}

	/*Controladores: Los controladores nos permiten cargar la pagina principal que queremos mostrar.*/
		public function resolveController(&$segments)
	{
		//	Generamos la propiedad controller
		$this -> controller = array_shift($segments);

		//	Si no tiene segmentos cargamos el controlador por defecto.
		if(empty($this -> controller))
			$this -> controller = $this -> globalParams['defaultPage'];
	}

	//	Obtener el controlador.
	public function getController()
	{
		return $this -> controller;
	}
	
	//	Obtenemos el nombre de la clase del controlador.
	public function getControllerClassName()
	{
		//	Armamos el array con todas las paginas posibles.
		//	FUTURO: Debería ir en configuración para poder activar libremente las páginas.
		$controllerClassName = array(
			'home' => 'Home',
			'hogar' => 'Residential',
			'empresa' => 'Business',
			'acerca' => 'AboutUs',
			'soporte' => 'Support'
		);

		//	Qué pasa si no existe la página requerida por el array.
		if(!array_key_exists($this -> getController(),$controllerClassName))
			$controllerClassName[$this -> getController()] = $this -> globalParams['defaultPage'];		

		//	Es necesario confirmar que la primera sea mayúscula.
		$controllerClassName[$this -> getController()] = ucfirst($controllerClassName[$this -> getController()]);

		//	Retornamos todo.
		return $controllerClassName[$this -> getController()] . 'Controller';
	}
	
	//	Obtenemos el nombre del archivo del controlador.
	public function getControllerFileName()
	{
		return 'controllers/' . $this -> getControllerClassName() . '.php';
	}

	/*Acciones: Las acciones son subpaginas o acciones relacionadas con el controlador en forma de clase.*/
	public function resolveAction(&$segments)
	{
		//	Generamos la propiedad action
		$this -> action = array_shift($segments);

		//	Si no tiene segmentos cargamos la acción por defecto.
		if(empty($this -> action))
			$this -> action = $this -> globalParams['defaultAction'];
	}

	//	Obtener la acción.
	public function getAction()
	{
		return $this -> action;
	}

	//	Obtenemos el nombre de la clase de la acción.
	public function getActionMethodName()
	{
		return $this -> getAction() . 'Action';
	}

	/*Parámetros: Pueden ser muchos y depende de las acciones.*/
	public function resolveParams(&$segments)
	{
		//	Generamos la propiedad params que almacena los parametros.
		$this -> params = $segments;
	}

	public function getParams()
	{
		return $this -> params;
	}

	public function execute()
	{
		//	Organizamos en variables los datos requeridos.
		$controllerClassName = $this -> getControllerClassName();
		$controllerFileName = $this -> getControllerFileName();
		$actionMethodName = $this -> getActionMethodName();
		$params = $this -> getParams();


		if(!file_exists($controllerFileName))
		{
			//	FUTURO: Llevar a una clase 404 Not Found.
			header('HTTP/1.0 404 Not Found');
			exit('Página no Encontrada');
		}
		require $controllerFileName;

		$controller = new $controllerClassName;
		$response = call_user_func_array(array($controller, $actionMethodName), array($params));
		
		$this -> executeResponse($response);
	}

	public function executeResponse($response)
	{
		if($response instanceof Response)
			$response -> execute();
		elseif(is_string($response))
			echo $response;
		elseif(is_array($response))
			echo json_encode($response);
		else
			exit('Respuesta No Válida');
	}
}
?>