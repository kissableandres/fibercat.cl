<?php
class HomeController{

	public function indexAction()
	{
		return new View('Home', ['titulo'=>'Fibercat PHP']);
	}

}
?>