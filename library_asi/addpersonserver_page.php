<?php

include("data_class.php");

$addnames=$_POST['addname'];
$addpass= $_POST['addpass'];
$addemail= $_POST['addemail'];
$type= $_POST['type'];


$data=new data();
$data->setconnection();
$data->addnewuser($addnames,$addpass,$addemail,$type);
