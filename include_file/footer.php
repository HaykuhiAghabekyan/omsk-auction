
<div class="clearfix"></div>
<section>
    <div class="container1">
        <div class="logo">
            <a href="home.php">
                <img src="images/logo.png" alt="omsk_auction">
            </a>

        </div>

        <div class="subscription">
            <h1>ПОДПИШИТЕСЬ НА САМЫЕ ПОСЛЕДНИЕ НОВОСТИ</h1>
            <form action="" method="post">
                <input type="email" name="email" placeholder="Ваш эл.почта">
                <button name="send_email">ОТПРАВИТЬ</button>
            </form>
        </div>
    </div>
</section>
<div class="clearfix"></div><footer>
    <div class="footer_bg">
        <div class="container1">
            <div class="col-xs-5">
                <h3>ПРОДУКТЫ</h3>
                <ul>
                    <li><a href=""><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>Компютеры</a></li>
                    <li><a href=""><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>Телевизоры</a></li>
                    <li><a href=""><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>Бытовая техника</a></li>
                    <li><a href=""><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>Компютерное оборудование</a></li>
                    <li><a href=""><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>Аксессуары для ухода</a></li>
                </ul>
            </div>
            <div class="col-xs-3 soc1">
                <h3>КОМПАНИЯ</h3>
                <ul>
                    <li><a href=""><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>О нас</a></li>
                    <li><a href=""><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>Контакты</a></li>
                </ul>
            </div>
            <div class="col-xs-4 soc">
                <h3>СОЦИАЛЬНИЕ ЦЕТИ</h3>
                <p><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></p>
                <p><a href=""><i class="fa fa-vk" aria-hidden="true"></i></a></p>
            </div>
            <div class="clearfix"></div>
            <div class="card">
                <p><img src="images/card.png" alt="mastercard"></p>
                <p><img  src="images/card.png" alt="mastercard"></p>
                <p><img  src="images/card.png" alt="mastercard"></p>
                <p><img  src="images/card.png" alt="mastercard"></p>
            </div>

        </div>
    </div>

    <div class="cliarfix"></div>
    <div class="copy">
        <div class="container1">
            <div class="col-xs-6">
                <p><span><i class="fa fa-copyright" aria-hidden="true"></i> 2017 Все права сохранены</span></p>
            </div>
            <div class="col-xs-6">
                <p class="armBit">Саит создал <img src="images/arm.png" alt="ArmBit"> ArmBit Компания</p>
            </div>
        </div>

    </div>
</footer>
 	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="javascript/slider.js"></script>
<script type="text/javascript" src="javascript/map.js"></script>
<script type="text/javascript" src="javascript/jssor.slider.min.js"></script>
<script type="text/javascript" src="javascript/javascript.js"></script>
<script>
    $('.lang').removeClass('active');
    $('.lang#<?php echo $lang;?>').addClass('active');

</script>
<script type="text/javascript">jssor_1_slider_init();</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCADnjTnDikX4p2JdiQUlXJpbYCNVa2cdU&callback=initMap">
</script>
</body>
</html>

