<?php 
class User extends Controller
{
	function __construct($params)
	{
		parent::__construct();
		$this->view->controller = "User";
		$this-> view -> page ="User";
		require_once 'model/User_model.php';
		$this->model = new User_model();
		
		$this->showAllUser();
	}
	
	public function showAllUser()
	{
		$this->view->name = 'Patryk';
		$this->view->alluser = $this->model->AllUser('*','users');
		$this->view->Render();
	}
}


?>