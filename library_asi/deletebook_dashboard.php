<?php
include("data_class.php");

$deletebookid=$_GET['deletebookid'];


$data=new data();
$data->setconnection();
$data->deletebook($deletebookid);