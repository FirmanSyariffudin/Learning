<?php 
//PENGULANGAN
// for
// while = dikerjakan bila kondisi true, jika false maka tidak dikerjakan
// do.. while = dikerjakan 1 kali meski kondisi false
// foreach= pengulangan khusus array

for($i=1;$i<=5;$i++){
    echo "Hello World!! <br>";
}

echo "<br>";

$i = 0;
while ( $i < 5 ) {
    echo " Hello World!! <br>";
$i++;
}

echo "<br>";

$i=0;
do{
    echo " Hello World!! <br>";
$i++;
} while( $i < 5 );

?>