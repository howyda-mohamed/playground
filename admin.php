<?php
session_start();
include_once'db/db.php';
include_once'db/query.php';
include 'validation/validation.php';
$select="SELECT * FROM reservation";
$query=mysqli_query($mysqlLink,$select);
if(mysqli_num_rows($query) >0)
{
	echo "<h1>our reservation</h1>";
	while($data=mysqli_fetch_array($query))
	{
		echo "<br>";
		echo "------------------------------------------------------------------------------"."<br>";
		echo "clientid :". $data['clientid']."<br>";
		echo "date :". $data['datereserve']."<br>";
		echo "from :". $data['fromtime']."<br>";
		echo "to :". $data['totime']."<br>";
		echo "hour". $data['hours']."<br>";
		echo "totalprice :".($data['hours'] * 30)."$" ."<br>";
	}
	echo "<a href='out.php'>out</a>";
}
else
{
	echo "no data";
	include_once'index.php';
}