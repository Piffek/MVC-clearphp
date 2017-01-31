<h1><?= $this->name ?></h1>

<?php  foreach($this->alluser as $row)
{
	echo '<br>'.$row['id'].".";
	echo $row['name'];
}?>