<?php
define ('HOST','localhost');
define('USER','root');
define('PASS','');
define('BASE','cadastros');

$con = new mysqli(HOST,USER,PASS,BASE);

if ($con == true) {
    echo 'Conectado com sucesso';
} 
?>