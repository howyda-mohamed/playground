<?php
session_start();
include_once'../db/query.php';
include '../validation/validation.php';
if(isset($_POST['register']))
{
	$_SESSION['username']=$_POST['username'];
	$_SESSION['password']=$_POST['password'];
	if($_POST['username']==NULL)
	{
		echo "sorry enter your username";
		include_once'login.html';
	}
	elseif($_POST['password']==NULL)
	{
		echo "sorry enter your password";
		include_once'login.html';
	}
	else
	{
		if($_POST['choose']=="client")
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			$boolusername=validateusername($username);
			$boolpassword=validatepassword($password);
			if($boolusername==true && $boolpassword==true)
	        {
			    $clientselect=selectquery("client","*","username='$username'");
			    if($clientselect==false)
			    {
				    $clientinsert=insertquery("client","username , password","'$username','$password'");
				    if($clientinsert)
				    {
				    	echo "your account is created so login";
				    	include_once'login.html';
				    }
				    else

				    {
				    	echo "error in insertion"."<br>";
				    	include_once'login.html';
				    }
			    }
			    else
			    {
			    	echo "sorry you  have an account so login"."<br>";
			    	include_once'login.html';
			    }
			}
		}
		else
		{
			echo "sorry enter your permission"."<br>";
			include_once'login.html';
		}
	}
	
}
else
{
	include_once'register.html';
}