<?php
require_once'db/db.php';
$select="SELECT * FROM playground WHERE id>=1 AND id<=4";
$res=mysqli_query($mysqlLink,$select);
$sel="SELECT * FROM staff";
$staff=mysqli_query($mysqlLink,$sel);
include_once'front/index.html';
