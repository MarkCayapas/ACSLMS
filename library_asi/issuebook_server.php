<?php

include("data_class.php");

$book=$_POST['book'];
$userselect= $_POST['userselect'];
$getdate= date("d/m/Y");
$days= $_POST['days'];

$returnDate=Date('d/m/Y', strtotime('+'.$days.'days'));

$data=new data();
$data->setconnection();
$data->issuebook($book,$userselect,$days,$getdate,$returnDate);
