<?php
/**
 * 06 Strings usinh single or double quotes and variable interpolation
 */
$message = 'Hello';
$name = "Hoàng";
$start = "3 o'clock";
$end = '4 o\'colck';

echo $start , $end;
$days = "Monday\nTuesday\nWenesday";
echo $days;
echo 'Hello' . $name;
echo '<hr/>';
echo "Hello $name";
echo '<hr/>';
echo "Hello {$name}";

?>