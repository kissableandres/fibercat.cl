<?php
/** 
* @Funciones Auxiliares. "Functions.php"
* @versión: 1.0.0      @modificado: 14 de Febrero del 2015
* @autor: Marcelo.
*
* Este archivo contiene métodos que permiten realizar multiples cosas.
*/
Class Functions{

	protected $param;
	protected $value;
	protected $defaults = array();
	protected $default_max;
	protected $free;

	public static function setParams($param, $value, $default, $free)
	{
		//	Obtenemos el número de parametros admisibles en $default. El primer item que se envía DEBE SER el defecto. 
		$default_max = count($default);
		//	Averiguamos cuál es el needle en que $value se encuentra en $default.
		$array_needle = array_search($value, $default);
		//	Revisamos el resultado de evaluar $value en $default.
		if(!$array_needle)						//	Si fuera falso:
		{
			//	Revisamos si no free.
			if(!$free)
				$value = $default[0];				//		Cambiamos por el defecto que es el primer elemento del array.
		}
		//	Si tuviera un valor, ejecutamos el parametro tal cual porque ya está correcto.
		return $value;
	}
}
?>