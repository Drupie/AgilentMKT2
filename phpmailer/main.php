<?php

$user="c0520408_formAds";
$pass="95tifuBUwa";
$db="c0520408_formAds";
$url="localhost";
$n=$_REQUEST['nombre'];
$t=$_REQUEST['email'];
$e=$_REQUEST['institucion'];

$con=mysqli_connect($url,$user,$pass,$db)or die("problemas en la conexión");
$sql="INSERT INTO prospectos_BET(email,nombre,institucion)VALUES('$n','$t','$e')";
mysqli_query($con,$sql);

echo "<style>div{
display:none;

}
h1{
    text-align:center;
}
</style>";
echo "<h1>Pronto te contactaremos</h1>";
echo"<div>";
include 'phpmailer-smtp.php';
echo "</div>"
?>