<?php 

class Index_model extends Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	public function MyModel($select, $from)
	{
		$mysqlp = $this-> Select($select, $from);
		return $mysqlp;

	}
	
	
	
}


?>