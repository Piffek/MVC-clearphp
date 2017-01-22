<?php 
class User extends Controller
{
	function __construct($params)
	{
		parent::__construct();
		$this->view->controller = "User";
		$this-> view -> page ="User";
		$this->view->name = 'Patryk';
		$this->view->Render();
	}
}


?>