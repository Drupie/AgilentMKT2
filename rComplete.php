<?php
$user="c0520408_formAds";
$pass="95tifuBUwa";
$db="c0520408_formAds";
$url="localhost";


$email=$_POST['EMAIL'];
$fname=$_POST['FNAME'];
$lname=$_POST['LNAME'];
$adress=$_POST['adress'];
$addressline=$_POST['adressLine'];
$adresscity=$_POST['adressCity'];
$estado=$_POST['stat'];
$adresspostal=$_POST['adressPostal'];
$country=$_POST['country'];
$phone=$_POST['PHONE'];
$mmerge6=$_POST['MMERGE6'];
$tect_bet=$_POST['TEC_BET'];
$tec_bet_2=$_POST['TEC_BET_2'];



$con=mysqli_connect($url,$user,$pass,$db)or die("problemas en la conexión");
$sql="INSERT INTO rcomplete(EMAIL,FNAME,LNAME,adress,adressLine,adressCity,stat,adressPostal,country,PHONE,MMERGE6,TEC_BET,TEC_BET_2)VALUES
('$email','$fname','$lname','$adress','$addressline','$adresscity','$estado','$adresspostal','$country','$phone','$mmerge6','$tect_bet','$tec_bet_2')";
mysqli_query($con,$sql);




// echo $email.'<br/>';
// echo $fname.'<br/>';
// echo $lname.'<br/>';
// echo $adress.'<br/>';
// echo $addressline.'<br/>';
// echo $adresscity.'<br/>';
// echo $estado.'<br/>';
// echo $adresspostal.'<br/>';
// echo $country.'<br/>';
// echo $phone.'<br/>';
// echo $mmerge6.'<br/>';
// echo $tect_bet.'<br/>';
// echo $tec_bet_2.'<br/>';
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="font/style.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Analisis Superficial BET</title>

</head>
<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/a84e609f3729913d01a154eb1/5d7287c956eb21aaafefbb469.js");</script>
<body>
    <header class="container-fluid">
    <div class="row datos">
        <div class="col-lg-6 correo">
            <a href="" ><span class="icon-envelop"></span> ventas@anyover.com.mx
            </a>
           
        </div>

        <div class="col-lg-6  tel">
          <a href=""><span  class="icon-phone"></span> 55-49-59-96-73</a>
        </div>
    </div>
    <div class="row menu">
      <div class="col-lg-2 col-sm-6 col-lg-6 logo">
        <img src="https://anyover.com.mx/LOGO-HORIZONTAL-pn.png" alt="">
    </div>

<div class="col-lg-6 col-sm-6 col-lg-6">
   <nav>
     <a href="https://anyover.com.mx/" target="_blank">Home</a>
     <a href="#instrumentos">Instrumentos</a>
     <a href="#aplicaciones">Aplicaciones</a>
     <a href="#eventos">Eventos</a>
   </nav>
</div>
</div>


    </header>
<div class="container mobile">
  <div class="row">
    <div class="col-lg-12">
      <img src="https://anyover.com.mx/LOGO-HORIZONTAL-pn.png " alt="">
    </div>
  </div>
</div>
 
      

   
      
   
<main>
<h1>Felicidades registro completado. Nos vemos el 13 de Abril del 2021.</h1>
<h2>Revisa tu correo los primeros dias de Abril para tener los datos de acceso.</h2>
</main>


   


</body>

    </html>
';

?>