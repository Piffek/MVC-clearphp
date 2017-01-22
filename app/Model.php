<?php 
class Model
{	

	function __construct()
	{
		$this->pdo=new PDO('mysql:host=127.0.0.1;dbname=users', 'root', '') or die();
	}
	
	public function Select($select="*", $from = null, $where = null, $orderBy = null, $limit = null)
	{
		$query = "SELECT " . $select;
		if ($from != null)
		{
			  $query .= " FROM " . $from;
		}
		
		if ($where != null)
		{
			 $query .= " WHERE " . $where;
		}
		
		if ($orderBy != null)
		{
			$query .= " ORDER BY " . $orderBy;
		}
		
		if ($limit != null)
		{
			$query .= " LIMIT " . $limit;
		}

		//$stmt = $this->pdo ->exec($query);
	
		//$query = '(SELECT * FROM users)';
		$stmt =$this->pdo->prepare($query);
		$stmt->execute();
		return $stmt;

		
		
		
	}

}