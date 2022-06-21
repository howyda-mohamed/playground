<?php
session_start();
include_once'db/query.php';
include 'validation/validation.php';
if(isset($_POST['send']))
{
	if($_POST['name']==NULL)
	{
		echo "sorry enter your name";
		include_once'front/contact.html';
	}
	elseif($_POST['email']==NULL)
	{
		echo "sorry enter your email";
		include_once'front/contact.html';
	}
	elseif($_POST['text']==NULL)
	{
		echo "sorry enter your massege";
		include_once'front/contact.html';
	}
	else
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$textarea=$_POST['text'];
		$boolusername=validateusername($name);
		$boolemail=validateemail($email);
		if($boolusername==true && $boolemail==true)
		{
			$insert=insertquery("contact","name , email, text","'$name','$email','$textarea'");
		    if($insert)
			{
				echo "your massege is send";
				include_once'contact.php';
			}
		    else
		    {
				echo "error try to send this massege again"."<br>";
				echo mysqli_errno();
				include_once'contact.php';
			}
	    }	
	}
}
else
{
	include_once'contact.php';
}