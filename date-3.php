<?php
date_default_timezone_set('Europe/Istanbul');
setlocale(LC_TIME, 'tr');

//echo strftime('%d %B %Y , %A' , strtotime('-3 day'));

echo strftime('%d %B %Y , %A - %T ');

echo date_default_timezone_get();
?>