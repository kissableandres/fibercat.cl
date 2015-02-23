<?php
/** 
* @Variables Por Defecto. "DefaultVars.php"
* @versión: 1.0.0      @modificado: 14 de Febrero del 2015
* @autor: Marcelo.
*
*	Esta sencilla clase tine por objetivo proveer de variables por defecto.
*/
class DefaultVars{

	//	Variables Utilizadas
	protected $globalParams = array();
	protected $environment;
	protected $param;
	protected $defaults = array();
	protected $required;
	protected $free;

	//	Función Contructor.
	public function __construct($globalParams)
	{
		//	Cargamos cada uno de los parámetros de config.
		$this -> globalParams = $globalParams;
	}

	#	[GET ENVORINMENT: Carga todas las variables obligatorias desde función registerVars.]
	public function pushGlobalParams($param,$defaults,$required,$free=false)
	{
		//	Si Environment no está seteado en config, generamos error siemrpe que sea requrido. 
		if(!isset($this -> globalParams[$param]))
		{
			//	¿Es requerido?
			if($required)
				//	Arrojamos error fatal.
				exit('Error Fatal: Setee Config.php:'.$param);
			//	Si no es requerido, como no está configurado, cargamos el defecto. 
			else
				$this -> globalParams[$param] = $defaults[0];
		}

		//	setParams en Functions es un método que evalua y agrega los parametros correctos. return: real value.
			return $this -> globalParams[$param] = Functions::setParams($param,$this -> globalParams[$param],$defaults, $free);
	}

	public function buildVars()
	{
		#	[Variables que dicen relación con la configuración del sitio.]
		$this -> pushGlobalParams('environment',['dev','pro'],1,0);									//	Modo Desarrollo o Producción.
		$this -> pushGlobalParams('timezone',['America/Santiago','America/Buenos_Aires'],0,0);		//	Zona Horaria del Servidor.
		$this -> pushGlobalParams('developer_ip',[$_SERVER['REMOTE_ADDR']],0,1);					//	Ip del Cliente.
		$this -> pushGlobalParams('url',[$_SERVER['HTTP_HOST']],0,1);								//	Dominio en formato misitio.com
		$this -> pushGlobalParams('is_secure',[false,true],1,0);									//	https on=1.
		$this -> pushGlobalParams('defaultPage',['home'],0,1);										//	Controlador por Defecto.
		$this -> pushGlobalParams('defaultAction',['index'],0,1);									//	Acción por Defecto.
		$this -> pushGlobalParams('get',[$_GET['url']],0,0);										//	Get después de misitio.com/.
		$this -> pushGlobalParams('full_url',[($this -> globalParams['is_secure'] == true ? 'https' : 'http') . '://' . $this -> globalParams['url'] . '/' . $this -> globalParams['get']],0,0);										//	URL Completa.
		#	[Hojas de Estilo]
		$this -> pushGlobalParams('css_directory',['css'],0,1);										//	Directorio CSS por Defecto.

		#	[Javascript]
		$this -> pushGlobalParams('js_directory',['js'],0,1);										//	Directorio Scripts por Defecto.

		#	[Configuración del HTML]
		$this -> pushGlobalParams('charset',['utf-8'],0,0);											//	Codificación utf-8.
		$this -> pushGlobalParams('pretitle',[false], 0,1);											//	Pre Título de la web. Defecto false.
		$this -> pushGlobalParams('posttitle',[false], 0,1);										//	Post Título de la web. Defecto false.
		$this -> pushGlobalParams('icon',[false], 0,1);												//	Nombre del Ícono de la web. Se carga de directorio de imagenes. Defecto false.
	}

	public function setGeo()
	{
		#	[Uso Horario del Server]
		date_default_timezone_set($this -> globalParams['timezone']);								//	Horario del Server
	}

	public function getGlobalParams()
	{
		return $this -> globalParams;
	}

	public function execute()
	{
		$this -> buildVars();
		$this -> setGeo();
	}
}

$defaultVars = new DefaultVars($globalParams);
$defaultVars -> execute();
//	Además devolvemos los parametros globales apra que sean accesibles de cualquier parte.
$globalParams = $defaultVars -> getGlobalParams();
?>