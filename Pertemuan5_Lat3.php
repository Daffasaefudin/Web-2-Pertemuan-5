<?php
$file = fopen("Pertemuan5_Lat1.txt","r");
while(! feof($file))
{
echo fgets($file). "<br />";
}
fclose($file);
?>
