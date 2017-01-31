<?php
session_start();
if(isset($_SESSION['logowanie']))
{
	echo $_SESSION['logowanie'];
}else 
{
	echo 'cos poszło nie tak jak powinno';
}
?>