<?php
include ("../config/config.php");
include '../class/ClassEvents.php';
$objEvents=new ClassEvents();
echo $objEvents->getEvents();