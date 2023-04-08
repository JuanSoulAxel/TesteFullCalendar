<?php
#Caminhos absolutos
$dirInt="";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$dirInt}");
$bar=(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/')?"":"/";
define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$bar}{$dirInt}");

#Banco de Dados
define('HOST','localhost');
define('DB','sistema');
define('USER','root');
define('PASS','1070');

#Incluir arquivos
include(DIRREQ.'FullCalendar/lib/composer/vendor/autoload.php');