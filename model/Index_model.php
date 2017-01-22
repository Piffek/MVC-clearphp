<?php 

class Index_model extends Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	public function MyModel($a, $b)
	{
		return $this->Select($a, $b);
	}
	
	
	
}


?>