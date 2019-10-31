<?php

//obrada pristiglih podataka iz tabele i upis u bazu

include( 'Inc/conect.php');

echo '<pre>';
print_r($_POST,true);
echo '</pre';

//upisati u bazu 

$_POST['factor1']