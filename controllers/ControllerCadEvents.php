<?php
include ("../config/config.php");
include '../class/ClassEvents.php';

$display = $_POST['inpDisplay'];
$color = $_POST['inpColor'];
$start = $_POST['inpStart'];
$end = $_POST['inpEnd'];

/*o fullcalender marca como se o end tivesse com um dia antes, fazendo a 
função abaixo ele acrescenta um dia e marca o calendário corretamente.*/
$end = date('Y-m-d', strtotime("+1 days",strtotime($end)));


$mandarPraFuncao=new ClassEvents();
$mandarPraFuncao->cadEvents($display, $color, $start, $end);
?> 