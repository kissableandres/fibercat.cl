<?php
#[CONFIG GENERAL]

#[Errores]
ini_set('display_errors',true);
error_reporting(E_ALL);

#[Configuración del Sitio]
$globalParams['environment'] = 'dev';				//	[dev,pro] En desarrollo mostrará todos los errores. En producción no. Defecto, dev.
$globalParams['is_secure'] = false;					//	¿Es requerido https obligatoriamente? true redirecciona a https. False permite utilizar https y http alternadamente.
$globalParams['url'] = 'fibercat.cl';				//	Dominio en formato misitio.com
$globalParams['timezone'] = 'America/Buenos_Aires';	//	Horario de Verano.

#[Hojas de Estilo]
$globalParams['sheetUrl'][0] = 'not_set';			//	Url de la css. Agregar cada hoja con un array correlativo. Formatos admisibles: URL absoluta o nombre de archivo 'mihoja.css'. En esta ultima la buscará en la carpeta CSS.

#[Scripts]
$globalParams['jsUrl'][0] = 'not_set';				//	Url del script. Agregar cada script con un array correlativo. Formatos admisibles: URL absoluta o nombre de archivo 'miscript.js'. En esta ultima la buscará en la carpeta JS.


?>