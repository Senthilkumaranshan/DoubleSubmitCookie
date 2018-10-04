<?php

require_once 'csrf.php';


$csrf_value = $_POST["csrf"];


if(isset($_POST['name']))
{
	if(csrf_token::check_csrf_token($csrf_value,$_COOKIE['csrf_cookie']))
	{
		
		echo "Dear, ".$_POST['name']." "."your data submitted successfully";	
		
	}
	else
	{
		echo "someone tried Cross-Site Request Forgery Attack which is eliminated using Double Submit Cookies </font>";
	}
}

?>