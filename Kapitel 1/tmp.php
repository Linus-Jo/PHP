<?php
/*
$tmp='a';
if ($tmp==='0'){
	echo 'Hurra!';
} elseif ($tmp==='a'){
	echo 'Händer inte :(';
}
*/
/*
$a=$b=5;
$a=$b+5;

echo "\$a=$a, \$b=$b<br>"; 
$b=$a-1;
echo "\$a=$a, \$b=$b <br>"; 
$c=$a/$b;
echo "\$a=$a, \$b=$b $c=$c <br>"; 
$c=$a%$b;
echo "\$a=$a, \$b=$b $c=$c <br>";
*/
/*
$a+=6;
$b-=2;
echo "\$a=$a, \$b=$b<br>"; 
$c=++$a;
$b=$a++;
echo "\$a=$a, \$b=$b \$c=$c <br>";
$b=$a++;
$c=++$a;
echo "\$a=$a, \$b=$b \$c=$c"; 
*/
/*
$a='kalle' . 'Nilsson';
echo $a . "<br>";
$b="Pelle" . 'Persson';
echo $b . '<br>';
$c='Kjell';
$c.="Hansen";
echo 'jag heter $c <br>';
echo "jag heter $c <br>";
*/
$a='Kalle ' . 'Nilsson';
$b=!$a;
$c=3 or 7;
$d=3 && 7;
echo "$a, $b, $c, $d <br>";
$a=true && false;
var_dump($a, $b, $c ,$d);
$a=true and false;
var_dump($a);