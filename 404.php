<?php
session_start();
if(!isset($_SESSION['lang'])){
    $lang='en';
}else {
    $lang=$_SESSION['lang'];
}
require_once ('include/'.$lang.'.php');
require_once "admin/connect.php";


//print_r($row['title_'.$_SESSION['lang']]);
?>
<!DOCTYPE html >
<html lang="en">
<head>
    <title>404</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merienda+One:400" rel="stylesheet">
    <!--    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">-->
    <link rel="stylesheet" type="text/css" href="style/main.css">
    <link rel="stylesheet" type="text/css" href="style/media.css">
    <link rel="icon" type="image/png" href="images/logo404.png">



    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
</head>
<body class="<?php echo $lang; ?>  body404">
<div class="pulse">
    <p class="pulse1"></p>
    <p class="pulse2"></p>
    <p class="pulse3"></p>
    <p class="pulse4"></p>
    <p class="pulse5"></p>
</div>
<header>
    <div class="menu404">
        <ul>
            <li><a href="home.php">главная</a></li>
            <li><a href="about_us.php">о нас</a></li>
            <li><a href="elektronics.php">электроника</a></li>
            <li><a href="moda.php">мода</a></li>
            <li><a href="contact.php">контакты</a></li>
        </ul>
    </div>
</header>

<div class="clearfix"></div>
<div class="content404">
    <div class="log404">
        <span>4</span>
        <div class="animated bounce"><img src="images/logo404.png" alt=""></div>
        <span>4</span>
    </div>
    <div class="clearfix"></div>
    <h1>Страница, которую вы ищите, не найдена, повторите попытку позже.</h1>
    <h3>Или нажмите кноку ниже, чтобы вернутся</h3>
    <h3>на главную страницу</h3>
    <a href="home.php">вернуться на <span><i class="fa fa-home"></i></span></a>

</div>
<div class="clearfix"></div>
<footer class="foot404">
    <div class="container2">
        <div class="col-xs-6">
            <p><span><i class="fa fa-copyright" aria-hidden="true"></i> 2017 Все права сохранены</span></p>
        </div>
        <div class="col-xs-6">
            <p class="armBit">Саит создал <img class="arm_img" src="images/arm.png" alt="ArmBit"> ArmBit Компания</p>
        </div>
    </div>

</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script  src="javascript/javascript.js"></script>
</body>