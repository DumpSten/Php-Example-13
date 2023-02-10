<?php

# strtotime();

# echo strtotime('now'); 

# $date = '2018-06-15 15:15:15';
# $unix = strtotime($date);

# echo date('Y-m-d H:i:s' , $unix);

$unix2 = time() - (60 *  60 * 24 * 2 );
$unix = strtotime('next Saturday' , $unix2);

echo date('Y-m-d H:i:s' , $unix);

/*

 echo strtotime("now"), "\n";

 echo strtotime("10 September 2000"), "\n";

 echo strtotime("+1 day"), "\n";

 echo strtotime("+1 week"), "\n";

 echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";

 echo strtotime("next Thursday"), "\n";

 echo strtotime("last Monday"), "\n";

*/
?>