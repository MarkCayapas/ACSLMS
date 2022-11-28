<?php

include("data_class.php");

$userid=$_GET['userid'];
$bookid=$_GET['bookid'];





$data=new data();
$data->setconnection();
$data->requestbook($userid,$bookid);

?>