<?php
include("data_class.php");

$delteuser=$_GET['useriddelete'];


$data=new data();
$data->setconnection();
$data->delteuserdata($delteuser);