<?php

# date()
# getdate()
# time()


//echo date('Y-m-d  H:i:s');

//$date = getdate();

//print_r($date)

//echo time();

//$time = 1676023634;

//$time = time();

//echo date('Y-m-d H:i:s' , $time);

$time = time() - ((60 * 60 * 24 ) * 35);

$date = getdate($time);

print_r($date);

?>