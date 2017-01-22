<?php 
class Model
{	
	private $host = '127.0.0.1';
	private $db_name = 'users';
	private $user ='root';
	private $pass = '';
	function __construct()
	{
		$this->pdo=new PDO('mysql:host='.$host.';dbname='.$db_name,$user,$pass);
	}
	
	public function Select($select="*", $from = null, $where = null, $orderBy = null, $limit = null)
	{
		$query = "SELECT" . $select;
		if ($from != null)
		{
			$query .= "FROM" . $from;
		}
		
		if ($where != null)
		{
			$query .= "WHERE" . $where;
		}
		
		if ($orderBy != null)
		{
			$query .= "ORDER BY" . $orderBy;
		}
		
		if ($limit != null)
		{
			$query .= "LIMIT" . $limit;
		}
		
		return $this->pdo ->exec($query);
		
		
		
	}

}