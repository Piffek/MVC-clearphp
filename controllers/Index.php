<?php 

class Index extends Controller
{
	function __construct($params)
	{
		parent::__construct();
		$this->view->controller = "Index";
		$this-> view -> page ="Index";
		require_once 'model/Index_model.php';
		$this->model = new Index_model();
		
		
		$action = 'Sumek';
			
		if(isset($params[1]))
		{
			$action = ucfirst($params[1]);
		}
		$this->co  = 'Fotki';
		if(isset($params[2]))
		{
			$this->co = ucfirst($params[2]);
		}
		
		$this->time = 'Cały dzień';
		if(isset($params[3]))
		{
			$this->time = ucfirst($params[3]);
		}
		
		
		
		
		$this->$action($this->co ,$this->time);
	}

	private function Sumek($co,$time)
	{
		$this->view->nowinki = 'Nowinki - '.$co.' = '.$time .'<br>';
		$this->view->mymodeli = $this->model -> MyModel('*', 'users','id=50');
		$this->view->Render();
	}

}
?>