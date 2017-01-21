<?php 

class View
{
	private $model;
	private $controller;
	
	public function __construct($controller,$model)
	{
		$this->controller=$controller;
		$this->model = $model;
	}
	
	public function output()
	{
		return '<p><a href="http://localhost/MVC-clearphp/index.php?action=click"> '. $this->model->string .'</a></p>';
	}
}
?>