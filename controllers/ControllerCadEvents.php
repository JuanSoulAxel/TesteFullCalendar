<?php
include ("../config/config.php");
include '../class/ClassEvents.php';

$display = $_POST['inpDisplay'];
$color = $_POST['inpColor'];
$start = $_POST['inpStart'];
$end = $_POST['inpEnd'];


$mandarPraFuncao=new ClassEvents();
$mandarPraFuncao->cadEvents($display, $color, $start, $end);
?> 