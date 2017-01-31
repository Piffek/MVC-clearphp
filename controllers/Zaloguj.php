<?php 
class Zaloguj extends Controller
{
	function __construct($params)
	{
		parent::__construct();
		$this->view->controller = "User";
		$this-> view -> page ="Zaloguj";
		require_once 'model/User_model.php';
		$this->model = new User_model();
	
		$this->login();
	}
	
	public function login()
	{
		$this->view->Render();
	}
}


?>