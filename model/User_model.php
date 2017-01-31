<?php 

class User_model extends Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	public function AllUser($select, $from)
	{
		$mysqlp = $this-> Select($select, $from);
		return $mysqlp;

	}
	
	
	
}