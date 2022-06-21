<?php
require_once'db/db.php';
$select="SELECT * FROM sportcenter";
$res=mysqli_query($mysqlLink,$select);
include_once'front/sports_center.html';