<?php

// $date = new DateTime('+4 day');

// $date = new DateTime('now' , new DateTimezone('Europe/Istanbul'));
// $date = new DateTime('');

# date('Y-m-d H:i:s')
/*

echo $date->format('Y-m-d H:i:s');
/echo $date->getTimestamp();

$date->setTimestamp(time());
echo $date->format('Y-m-d H:i:s')

$date->setTimestamp(time());
$date->modify('+2 day');

echo $date->format('Y-m-d H:i:s')
*/
// $date->setTimezone(new DateTimezone('Europe/Istanbul'));

// echo $date->format('Y-m-d H:i:s')

$date1 = new DateTime('2017-12-23 20:53:24', new DateTimeZone('Europe/Istanbul'));
$date2 = new DateTime();

$fark = $date1->diff($date2);
$date = $fark->format('%y yıl %m ay %d gün %h saat %i dakika %s saniye');

$date = str_replace(
    ['0 yıl', ' 0 ay', ' 0 gün', ' 0 saat', ' 0 dakika'],
    '',
    $date
);

echo $date . ' önce yayınlandı!';

?>