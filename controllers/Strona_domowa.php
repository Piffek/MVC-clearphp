<?php 
class Strona_domowa extends Controller
{
	function __construct($params)
	{
		parent::__construct();
		$this->view->controller = "User";
		$this-> view -> page ="Strona_domowa";
		require_once 'model/User_model.php';
		$this->model = new User_model();
	

		$this->showPage($nick);
		$this->hasSession();
	}
	
	public function showPage()
	{
		if($_POST['Nick'] === 'Patryk')
		{
			session_start();
			$_SESSION['logowanie'] = $_POST['Nick'];
			$this->hasSession();
		}else 
		{
				echo 'Błędne dane!';
		}
		
	}
	
	public function hasSession()
	{
		if(isset($_SESSION['logowanie']))
		{
			$this->view->render();
		}
	}
}
