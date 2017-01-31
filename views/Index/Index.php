<h4><?= $this->nowinki; ?></h4>
<?php  foreach($this->mymodeli as $row)
{
	echo '<br>'.$row['id'].".";
	echo $row['name'];
}?>




