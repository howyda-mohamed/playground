<?php
require_once'db/db.php';
$select="SELECT * FROM contact";
$res=mysqli_query($mysqlLink,$select);
include_once'front/contact.html';
