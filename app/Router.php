<?php 
class Router
{
	function __construct()
	{
		//dostępna w całej klasie
		$this->request = $_GET['url'];
		$this->request = rtrim($this->request,"/");
		$this->params = explode("/",$this->request);
		//pierwszy parametr jest to nazwa kontrollera
		$this->controller = $this -> params[0];
		if($this->controller == "index.php")
		{
			$this->controller = "Index";
		}
		//wielkie litery
		$this->controller = ucfirst($this->controller);
		
		$file = 'controllers/' . $this->controller . '.php';
		if(file_exists($file))
		{
			require_once $file;
			$this->control = new $this->controller($this->params);
		}else 
		{
			echo 'Cos jest nie tak';
		}

	}
	
	
	
}


?>