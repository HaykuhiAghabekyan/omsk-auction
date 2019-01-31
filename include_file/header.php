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
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,500,600,700" rel="stylesheet">
<!--    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">-->
    <link rel="stylesheet" type="text/css" href="style/main.css">
    <link rel="stylesheet" type="text/css" href="style/media.css">
    <link rel="icon" type="image/png" href="images/logo404.png">



    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
</head>
<body class="<?php echo $lang; ?>">
<header>
    <div class="container1">
        <div class="language">

            <span class="lang active" id="ru"><?php echo $ru; ?></span>
            <span class="lang-slash">/</span>
            <span class="lang " id="en"><?php echo $en; ?></span>
        </div>
        <div class="logo">
            <a href="home.php">
                <img src="images/logo.png" alt="omsk_auction">
            </a>

        </div>
        <div class="clearfix"></div>
        <div class="row cab">
            <div class="col-xs-6">
                <p>
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    +89 136 666 605

                </p>
                <span>|</span>
                <p>
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    blala@gmail.com
                </p>
            </div>
            <div class="col-xs-6">
                <div class=" cab_rigth">
                    <p class="acoun">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        ЛИЧНЫЙ КАБИНЕТ
                    </p>
                    <span>|</span>
                    <p class="user">
                        <img src="images/user.png" alt="user">
                        ПОМОЩ
                    </p>
                    <span>|</span>
                    <p class="shop_cart">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <span>0</span>
                    </p>
                    <span>|</span>
                    <p class="searc">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </p>
                </div>

            </div>
        </div>


        <div class="korzina">
            <h1><span>2</span> продукта</h1>
            <div>
                <div class="pr_img">
                    <img src="images/prod1.png" alt="">
                </div>
                <h5>Стиральная машина LG</h5>
                <span>
                    Число: 1
                </span>
                <p class="cena">55.000руб.</p>
                <p class="del"><i class="fa fa-times-circle-o" aria-hidden="true"></i></p>
            </div>
            <div class="clearfix"></div>
            <div>
                <div class="pr_img">
                    <img src="images/prod1.png" alt="">
                </div>
                <h5>Стиральная машина LG</h5>
                <span>
                    Число: 1
                </span>
                <p class="cena">55.000руб.</p>
                <p class="del"><i class="fa fa-times-circle-o" aria-hidden="true"></i></p>
            </div>
            <h4>итог<span>110.000руб.</span></h4>
            <a href="cart.php">проверить</a>
        </div>


        <div class="search">
            <form action="" method="post">
                <input type="text" id="search" placeholder="Поиск">
                <label for="search"><i class="fa fa-search" aria-hidden="true"></i></label>
            </form>
        </div>

        <div class="acound">
            <p class="logIn"><a href="login.php"><i class="fa fa-unlock-alt" aria-hidden="true"></i>Вход</a></p>
            <p class="logOut"><i class="fa fa-lock" aria-hidden="true"></i>Выход</p>
        </div>

        <div class="clearfix"></div>
        <div class="menu">
            <ul>
                <li class="omsk_auction"><a href="home.php">ГЛАВНАЯ<span>|</span></a></li>
                <li><a href="">О НАС<span>|</span></a></li>
                <li class="elektronika"><a href="elektronics.php">ЭЛЕКТРОНИКА<span>|</span></a>
                    <div class="elek">
                        <div class="menu_hover elek_hover">
                            <div class="col-xs-4">
                                <h3>электроника</h3>
                                <ul>
                                    <li><a href="">Компютерное оборудование</a></li>
                                    <li><a href="">Малая бытовая техника</a></li>
                                    <li><a href="">Аксеццуары для ухода</a></li>
                                    <li><a href="">Компютеры</a></li>
                                    <li><a href="">Ноутбуки</a></li>
                                    <li><a href="">Смартфоны</a></li>
                                    <li><a href=""> Таблетки</a></li>
                                    <li><a href=""> Телевизоры</a></li>

                                </ul>
                            </div>
                            <div class="col-xs-8 bor_l">
                                <h3> колекция электроники</h3>
                                <div class="hov_prod">
                                    <div class="col-sm-6 col-xs-12">
                                        <a href="product.php">
                                            <div class="pr_img ">
                                                <img src="images/prod1.png" alt="">
                                            </div>
                                            <p>Сиральная машина LG</p>
                                        </a>

                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <a href="product.php">
                                        <div class="pr_img ">
                                            <img src="images/prod1.png" alt="">
                                        </div>
                                        <p>Сиральная машина LG</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="hov_prod hov_prod1">
                                    <div class="col-sm-6 col-xs-12">
                                        <a href="product.php">
                                        <div class="pr_img ">
                                            <img src="images/prod1.png" alt="">
                                        </div>
                                        <p>Сиральная машина LG</p>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <a href="product.php">
                                        <div class="pr_img ">
                                            <img src="images/prod1.png" alt="">
                                        </div>
                                        <p>Сиральная машина LG</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </li>
                <li class="fashion" ><a href="">МОДА<span>|</span></a>
                    <div class="moda">
                        <div class="menu_hover elek_hover">
                            <div class="col-sm-4 col-xs-4">
                                <h3>Мода</h3>
                                <ul>
                                    <li><a href="">Женский</a></li>
                                    <li><a href="">Мужской</a></li>
                                    <li><a href="">Детский</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-8 col-xs-8 bor_l">
                                <h3> колекция электроники</h3>
                                <div class="hov_prod">
                                    <div class="col-sm-6 col-xs-12">
                                        <a href="product.php">
                                        <div class="pr_img ">
                                            <img src="images/prod1.png" alt="">
                                        </div>
                                        <p>Сиральная машина LG</p>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <a href="product.php">
                                        <div class="pr_img ">
                                            <img src="images/prod1.png" alt="">
                                        </div>
                                        <p>Сиральная машина LG</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="hov_prod hov_prod1">
                                    <div class="col-sm-6 col-xs-12">
                                        <a href="product.php">
                                        <div class="pr_img ">
                                            <img src="images/prod1.png" alt="">
                                        </div>
                                        <p>Сиральная машина LG</p>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <a href="product.php">
                                        <div class="pr_img ">
                                            <img src="images/prod1.png" alt="">
                                        </div>
                                        <p>Сиральная машина LG</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </li>
                <li class="CONTACT"><a href="contact.php">КОНТАКТЫ</a></li>
            </ul>
            <div class="elek elek1">
                <div class="menu_hover elek_hover">
                    <div class="col-xs-4">
                        <h3>электроника</h3>
                        <ul>
                            <li><a href="">Компютерное оборудование</a></li>
                            <li><a href="">Малая бытовая техника</a></li>
                            <li><a href="">Аксеццуары для ухода</a></li>
                            <li><a href="">Компютеры</a></li>
                            <li><a href="">Ноутбуки</a></li>
                            <li><a href="">Смартфоны</a></li>
                            <li><a href=""> Таблетки</a></li>
                            <li><a href=""> Телевизоры</a></li>

                        </ul>
                    </div>
                    <div class="col-xs-8 bor_l">
                        <h3> колекция электроники</h3>
                        <div class="hov_prod">
                            <div class="col-sm-6 col-xs-12">
                                <a href="">
                                    <div class="pr_img ">
                                        <img src="images/prod1.png" alt="">
                                    </div>
                                    <p>Сиральная машина LG1</p>
                                </a>

                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="pr_img ">
                                    <img src="images/prod1.png" alt="">
                                </div>
                                <p>Сиральная машина LG</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="hov_prod hov_prod1">
                            <div class="col-sm-6 col-xs-12">
                                <div class="pr_img ">
                                    <img src="images/prod1.png" alt="">
                                </div>
                                <p>Сиральная машина LG</p>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="pr_img ">
                                    <img src="images/prod1.png" alt="">
                                </div>
                                <p>Сиральная машина LG</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="moda moda1">
                <div class="menu_hover elek_hover">
                    <div class="col-sm-4 col-xs-4">
                        <h3>Мода</h3>
                        <ul>
                            <li><a href="">Женский</a></li>
                            <li><a href="">Мужской</a></li>
                            <li><a href="">Детский</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-8 col-xs-8 bor_l">
                        <h3> колекция электроники</h3>
                        <div class="hov_prod">
                            <div class="col-sm-6 col-xs-12">
                                <div class="pr_img ">
                                    <img src="images/prod1.png" alt="">
                                </div>
                                <p>Сиральная машина LG</p>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="pr_img ">
                                    <img src="images/prod1.png" alt="">
                                </div>
                                <p>Сиральная машина LG</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="hov_prod hov_prod1">
                            <div class="col-sm-6 col-xs-12">
                                <div class="pr_img ">
                                    <img src="images/prod1.png" alt="">
                                </div>
                                <p>Сиральная машина LG</p>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="pr_img ">
                                    <img src="images/prod1.png" alt="">
                                </div>
                                <p>Сиральная машина LG</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <p class="hamburg">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </p>
        </div>
        <div class="menu_hidden">
            <ul>
                <li ><a href="home.php">ГЛАВНАЯ</a></li>
                <li><a href="">О НАС</a></li>
                <li class="elektron"><a>ЭЛЕКТРОНИКА</a></li>
                <li class="fash"><a>МОДА</a></li>
                <li><a href="">КОНТАКТЫ</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>


    </div>
</header>
<header class="header1">
    <div class="container1">
        <div class="language">

            <span class="lang active" id="ru"><?php echo $ru; ?></span>
            <span class="lang-slash">/</span>
            <span class="lang " id="en"><?php echo $en; ?></span>
        </div>
        <div class="logo">
            <a href="home.php">
                <img src="images/logo.png" alt="omsk_auction">
            </a>

        </div>
        <div class="clearfix"></div>
        <div class="row cab">
            <div class="col-xs-6">
                <p>
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    +89 136 666 605

                </p>
                <span>|</span>
                <p>
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    blala@gmail.com
                </p>
            </div>
            <div class="col-xs-6">
                <div class=" cab_rigth">
                    <p class="acoun">
                        Здраствуй, <span class="user_name">Аня Савалова</span>
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </p>
                    <span>|</span>
                    <p class="user">
                        <img src="images/user.png" alt="user">
                        ПОМОЩ
                    </p>
                    <span>|</span>
                    <p class="shop_cart">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <span>0</span>
                    </p>
                    <span>|</span>
                    <p class="searc">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </p>
                </div>

            </div>
        </div>


        <div class="korzina">
            <h1><span>2</span> продукта</h1>
            <div>
                <div class="pr_img">
                    <img src="images/prod1.png" alt="">
                </div>
                <h5>Стиральная машина LG</h5>
                <span>
                    Число: 1
                </span>
                <p class="cena">55.000руб.</p>
                <p class="del"><i class="fa fa-times-circle-o" aria-hidden="true"></i></p>
            </div>
            <div class="clearfix"></div>
            <div>
                <div class="pr_img">
                    <img src="images/prod1.png" alt="">
                </div>
                <h5>Стиральная машина LG</h5>
                <span>
                    Число: 1
                </span>
                <p class="cena">55.000руб.</p>
                <p class="del"><i class="fa fa-times-circle-o" aria-hidden="true"></i></p>
            </div>
            <h4>итог<span>110.000руб.</span></h4>
            <a href="cart.php">проверить</a>
        </div>


        <div class="search">
            <form action="" method="post">
                <input type="text" id="search" placeholder="Поиск">
                <label for="search"><i class="fa fa-search" aria-hidden="true"></i></label>
            </form>
        </div>

        <div class="acound">
            <p class="logIn"><a href="register.php"><i class="fa fa-user" aria-hidden="true"></i>Мой аккаунт</a></p>
            <p class="logOut"><i class="fa fa-power-off" aria-hidden="true"></i>Выход</p>
        </div>

        <div class="clearfix"></div>
        <div class="menu">
            <ul>
                <li class="omsk_auction"><a href="home.php">ГЛАВНАЯ<span>|</span></a></li>
                <li><a href="">О НАС<span>|</span></a></li>
                <li class="elektronika"><a href="elektronics.php">ЭЛЕКТРОНИКА<span>|</span></a>
                    <div class="elek">
                        <div class="menu_hover elek_hover">
                            <div class="col-xs-4">
                                <h3>электроника</h3>
                                <ul>
                                    <li><a href="">Компютерное оборудование</a></li>
                                    <li><a href="">Малая бытовая техника</a></li>
                                    <li><a href="">Аксеццуары для ухода</a></li>
                                    <li><a href="">Компютеры</a></li>
                                    <li><a href="">Ноутбуки</a></li>
                                    <li><a href="">Смартфоны</a></li>
                                    <li><a href=""> Таблетки</a></li>
                                    <li><a href=""> Телевизоры</a></li>

                                </ul>
                            </div>
                            <div class="col-xs-8 bor_l">
                                <h3> колекция электроники</h3>
                                <div class="hov_prod">
                                    <div class="col-sm-6 col-xs-12">
                                        <a href="product.php">
                                            <div class="pr_img ">
                                                <img src="images/prod1.png" alt="">
                                            </div>
                                            <p>Сиральная машина LG</p>
                                        </a>

                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <a href="product.php">
                                            <div class="pr_img ">
                                                <img src="images/prod1.png" alt="">
                                            </div>
                                            <p>Сиральная машина LG</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="hov_prod hov_prod1">
                                    <div class="col-sm-6 col-xs-12">
                                        <a href="product.php">
                                            <div class="pr_img ">
                                                <img src="images/prod1.png" alt="">
                                            </div>
                                            <p>Сиральная машина LG</p>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <a href="product.php">
                                            <div class="pr_img ">
                                                <img src="images/prod1.png" alt="">
                                            </div>
                                            <p>Сиральная машина LG</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </li>
                <li class="fashion" ><a href="">МОДА<span>|</span></a>
                    <div class="moda">
                        <div class="menu_hover elek_hover">
                            <div class="col-sm-4 col-xs-4">
                                <h3>Мода</h3>
                                <ul>
                                    <li><a href="">Женский</a></li>
                                    <li><a href="">Мужской</a></li>
                                    <li><a href="">Детский</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-8 col-xs-8 bor_l">
                                <h3> колекция электроники</h3>
                                <div class="hov_prod">
                                    <div class="col-sm-6 col-xs-12">
                                        <a href="product.php">
                                            <div class="pr_img ">
                                                <img src="images/prod1.png" alt="">
                                            </div>
                                            <p>Сиральная машина LG</p>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <a href="product.php">
                                            <div class="pr_img ">
                                                <img src="images/prod1.png" alt="">
                                            </div>
                                            <p>Сиральная машина LG</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="hov_prod hov_prod1">
                                    <div class="col-sm-6 col-xs-12">
                                        <a href="product.php">
                                            <div class="pr_img ">
                                                <img src="images/prod1.png" alt="">
                                            </div>
                                            <p>Сиральная машина LG</p>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <a href="product.php">
                                            <div class="pr_img ">
                                                <img src="images/prod1.png" alt="">
                                            </div>
                                            <p>Сиральная машина LG</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </li>
                <li class="CONTACT"><a href="contact.php">КОНТАКТЫ</a></li>
            </ul>
            <div class="elek elek1">
                <div class="menu_hover elek_hover">
                    <div class="col-xs-4">
                        <h3>электроника</h3>
                        <ul>
                            <li><a href="">Компютерное оборудование</a></li>
                            <li><a href="">Малая бытовая техника</a></li>
                            <li><a href="">Аксеццуары для ухода</a></li>
                            <li><a href="">Компютеры</a></li>
                            <li><a href="">Ноутбуки</a></li>
                            <li><a href="">Смартфоны</a></li>
                            <li><a href=""> Таблетки</a></li>
                            <li><a href=""> Телевизоры</a></li>

                        </ul>
                    </div>
                    <div class="col-xs-8 bor_l">
                        <h3> колекция электроники</h3>
                        <div class="hov_prod">
                            <div class="col-sm-6 col-xs-12">
                                <a href="">
                                    <div class="pr_img ">
                                        <img src="images/prod1.png" alt="">
                                    </div>
                                    <p>Сиральная машина LG1</p>
                                </a>

                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="pr_img ">
                                    <img src="images/prod1.png" alt="">
                                </div>
                                <p>Сиральная машина LG</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="hov_prod hov_prod1">
                            <div class="col-sm-6 col-xs-12">
                                <div class="pr_img ">
                                    <img src="images/prod1.png" alt="">
                                </div>
                                <p>Сиральная машина LG</p>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="pr_img ">
                                    <img src="images/prod1.png" alt="">
                                </div>
                                <p>Сиральная машина LG</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="moda moda1">
                <div class="menu_hover elek_hover">
                    <div class="col-sm-4 col-xs-4">
                        <h3>Мода</h3>
                        <ul>
                            <li><a href="">Женский</a></li>
                            <li><a href="">Мужской</a></li>
                            <li><a href="">Детский</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-8 col-xs-8 bor_l">
                        <h3> колекция электроники</h3>
                        <div class="hov_prod">
                            <div class="col-sm-6 col-xs-12">
                                <div class="pr_img ">
                                    <img src="images/prod1.png" alt="">
                                </div>
                                <p>Сиральная машина LG</p>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="pr_img ">
                                    <img src="images/prod1.png" alt="">
                                </div>
                                <p>Сиральная машина LG</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="hov_prod hov_prod1">
                            <div class="col-sm-6 col-xs-12">
                                <div class="pr_img ">
                                    <img src="images/prod1.png" alt="">
                                </div>
                                <p>Сиральная машина LG</p>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="pr_img ">
                                    <img src="images/prod1.png" alt="">
                                </div>
                                <p>Сиральная машина LG</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <p class="hamburg">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </p>
        </div>
        <div class="menu_hidden">
            <ul>
                <li ><a href="home.php">ГЛАВНАЯ</a></li>
                <li><a href="">О НАС</a></li>
                <li class="elektron"><a>ЭЛЕКТРОНИКА</a></li>
                <li class="fash"><a>МОДА</a></li>
                <li><a href="">КОНТАКТЫ</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>


    </div>
</header>
<div class="clearfix"></div>

