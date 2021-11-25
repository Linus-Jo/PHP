<?php

$namn=$_POST['namn'];
$fodelsedag=$_POST['fodelsedag'];
$user=$_POST['user'];
$losen=$_POST['losen'];
$telefon=$_POST['telefon'];

echo 	"Du skrev in följande:<br>";
echo 	"namn:<b>$namn</b><br>";
echo	"födelsedag:<b>$fodelsedag</b><br>";
echo	"användarnamn:<b>$user</b><br>";
echo	"lösenord: <b>$losen</b><br>";
echo	"telefonnummer: <b>$telefon</b><br>";
?>