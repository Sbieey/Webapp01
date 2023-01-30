<?php
echo 'This is the PHP  page';
echo '<br>';
echo '<b>This is the Second line</b><br>';
$names[]  = 'zakari';
$names[]  = 'yusuf';
$names[]  = 'Abdul';
$names[]  = 'Abdulrahman';
$names[]  = 'Suleiman';

$c = 1;
foreach($names as $name){
    echo $c.' '.$name.'<br>';
    $c++;
}