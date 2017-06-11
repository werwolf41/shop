<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#f5f5f5">
    <meta name="csrf-param" content="_csrf-frontend">
    <meta name="csrf-token" content="dzg1OEZaeWQBd393NSMWDjkMA1x/LQsvNFdDXQVjABcQUHJ3dmw.MA==">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="common-home"> <!--Класс меняется-->
<?php $this->beginBody() ?>

<header>
    <div id="top">
        <div class="container text-center text-right-md" >
            <div class="pull-left">
                <div class="btn-group">
                    <a class="btn" href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=account/wishlist" id="wishlist-total"><i class="fa fa-heart icon"></i><span class="hidden-xs hidden-sm">&nbsp;&nbsp;Закладки&nbsp;</span>&nbsp;<span class="badge">0</span></a>
                </div>
                <div class="btn-group">
                    <a class="btn" href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/compare" id="compare-total"><i class="fa fa-balance-scale icon"></i><span class="hidden-xs hidden-sm">&nbsp;&nbsp;Сравнение товаров&nbsp;</span>&nbsp;<span class="badge">0</span></a>
                </div>
            </div>
            <div class="pull-right">
                <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user icon"></i>
                        <span class="hidden-sm hidden-xs">&nbsp;&nbsp;Личный кабинет&nbsp;</span>
                        <span class="fa fa fa-angle-down caretalt"></span>
                    </button>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=account/login"><i class="fa fa-sign-in fa-fw dropdown-menu-icon"></i>&nbsp;&nbsp;Авторизация</a></li>
                        <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=account/register"><i class="fa fa-pencil fa-fw dropdown-menu-icon"></i>&nbsp;&nbsp;Регистрация</a></li>
                    </ul>
                </div>
            </div>
            <div class="pull-right">
                <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-support icon"></i><span class="hidden-sm hidden-xs">&nbsp;&nbsp;Помощь&nbsp;</span>&nbsp;<i class="fa fa fa-angle-down caretalt"></i>
                    </button>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#">Ссылка 1</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row logo-line">
            <div class="col-sm-12 col-md-3">
                <div id="logo">
                    <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=common/home"><img src="http://coloring.xds.by/demo/oc_2.3.x/image/catalog/logo.png" title="Your Store" alt="Your Store" class="img-responsive" /></a>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 text-center text-left-md">
                <div id="phone">
                    <div class="phone">
						<span data-toggle="dropdown"  class="main-phone">
							<i class="glyphicon glyphicon-phone-alt icon"></i>&nbsp;
							<span>8 (012) 345-67-89</span>
														<span class="fa fa fa-angle-down caretalt"></span>
													</span>
                        <ul class="dropdown-menu allcontacts">
                            <li><a class="btn-callback" onclick="callback();"><i class="fa fa-share"></i>&nbsp;&nbsp;Перезвоните мне</a></li>
                            <li class="divider"></li>
                            <li>
                                <a href="tel:8(012)345-67-88">
                                    <img src="/image/03.png" class="max16" alt="8 (012) 345-67-88" />&nbsp;
                                    8 (012) 345-67-88								</a>
                            </li>
                            <li>
                                <a href="tel:8(012)345-67-87">
                                    <img src="/image/04.png" class="max16" alt="8 (012) 345-67-87" />&nbsp;
                                    8 (012) 345-67-87								</a>
                            </li>
                            <li>
                                <a href="tel:8(012)345-67-86">
                                    <img src="/image/07.png" class="max16" alt="8 (012) 345-67-86" />&nbsp;
                                    8 (012) 345-67-86								</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="schedule">
                                    <i class="fa fa-clock-o fu"></i>&nbsp;
                                    ежедневно с 8:30 до 21:15								</div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="mailto:info@mystore.by" target="_blank"><i class="fa fa-envelope-o fu"></i>&nbsp;
                                    info@mystore.by</a>

                                <a href="#" target="_blank">
                                    <img src="/image/icon_0003_vk.png" class="max16" alt="@vkmystore" />&nbsp;
                                    @vkmystore								</a>
                                <a href="#" target="_blank">
                                    <img src="/image/icon_0008_twitter 1.png" class="max16" alt="@twmystore" />&nbsp;
                                    @twmystore								</a>
                                <a href="#" target="_blank">
                                    <img src="/image/icon_0012_skype.png" class="max16" alt="mystore_superstar" />&nbsp;
                                    mystore_superstar								</a>
                            </li>

                        </ul>
                    </div>
                    <br>
                    <span class="hint">по будням с 8:00 до 20:00</span>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 text-center text-right-md">
                <div id="header-menu">
                    <a class="btn" href="index.php?route=information/information&amp;information_id=4"><span>О нас</span></a>
                    <a class="btn" href=""><span>Оплата</span></a>
                    <a class="btn" href=""><span>Доставка</span></a>
                    <a class="btn" href="index.php?route=information/contact"><span>Контаты</span></a>
                    <a class="btn" href="http://coloring.xds.by/buy/"><span><span style="color:#d9534f; font-weight:bold">Акция!</span></span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row menu-line">
            <div class="col-sm-12 col-md-7 col-md-push-3 search-box"><div id="search" class="input-group">
                    <div class="input-group-btn categories">
                        <button id="change_category" type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                            <span class="category-name">Везде&nbsp;</span>&nbsp;<span class="fa fa fa-angle-down caretalt"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#" onclick="return false;" id="0">Везде</a></li>
                            <li><a href="#" onclick="return false;" id="20">Компьютеры</a></li>
                            <li><a href="#" onclick="return false;" id="18">Ноутбуки</a></li>
                            <li><a href="#" onclick="return false;" id="25">Комплектующие</a></li>
                            <li><a href="#" onclick="return false;" id="57">Планшеты</a></li>
                            <li><a href="#" onclick="return false;" id="17">Софт</a></li>
                            <li><a href="#" onclick="return false;" id="24">Телефоны и PDA</a></li>
                            <li><a href="#" onclick="return false;" id="33">Фото товары</a></li>
                            <li><a href="#" onclick="return false;" id="34">MP3 плееры</a></li>
                        </ul>
                        <input id="selected_category" type="hidden" name="category_id" value="0" />
                    </div>
                    <input type="text" name="search" value="" placeholder="Поиск" class="form-control" />
                    <div class="input-group-btn">
                        <button type="button" class="btn" id="search-button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
                <script type="text/javascript">
                    $('#search a').click(function(){
                        $("#selected_category").val($(this).attr('id'));
                        $('#change_category').html('<span class="category-name">' + $(this).html() + '&nbsp;</span>&nbsp;<span class="fa fa fa-angle-down caretalt"></span>');
                    });
                </script>
            </div>
            <div class="col-sm-6 col-sm-push-6 col-md-2 col-md-push-3 cart-box"><div id="cart" class="btn-group btn-block">
                    <button type="button"  data-toggle="modal" data-target="#modal-cart" data-loading-text="Загрузка..." class="btn btn-primary btn-block dropdown-toggle">
                        <i class="fa fa-angle-down"></i>
                        <span id="cart-total"><span class="products"><b>0</b> товаров, </span><span class="prices">на <b>$ 0.00</b></span></span>
                    </button>
                    <div id="modal-cart" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">
                                        <span class="fa fa-shopping-basket fa-fw"></span>&nbsp;&nbsp;Корзина покупок	        </h4>
                                </div>
                                <div class="modal-body">
                                    <div class="text-center" style="padding: 30px 0">Ваша корзина пуста!</div>
                                    <div class="cartMask white"><div><div><i class="fa fa-circle-o-notch fa-spin fa-2x fa-fw"></i></div></div></div>

                                </div>
                                <div class="modal-footer">
                                    <div class="row">
                                        <div class="col-sm-4 btn-col-1">
                                            <a class="btn btn-default btn-block" data-dismiss="modal">Продолжить покупки</a>
                                        </div>
                                        <div class="col-sm-4 btn-col-2">
                                            <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=checkout/cart" class="btn btn-default btn-block">Перейти в корзину</a>
                                        </div>
                                        <div class="col-sm-4 btn-col-3">
                                            <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=checkout/checkout" class="btn btn-block btn-danger">Оформить заказ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <script>
                    $(document).ready(function () {
                        $('body').append($('#modal-cart'));
                    });
                    $('#modal-cart').on('hidden.bs.modal', function (e) {
                        $(this).find('.alert').remove();
                    })
                </script></div>


            <div class="col-sm-6 col-sm-pull-6 col-md-3 col-md-pull-9 menu-box">
                <nav id="menu" class="btn-group btn-block">


                

                    <button type="button" class="btn btn-menu btn-block dropdown-toggle"  data-toggle="dropdown" ><i class="fa fa-bars"></i>Категории</button>
                    <?= \app\components\CategoryWidget::widget();?>
                    <div id="menuMask"></div>
                    <script>$('#menu-list').hover(function () {$('body').addClass('blured')},function () {$('body').removeClass('blured')});</script>
                </nav>
            </div>        </div>
    </div>
</header>


<div class="content-wrapper">
    <div class="container">


<?=$content; ?>

    </div>
</div>



    <script type="text/javascript">$(function(){$('#menu-home-helper').css({'min-height': $('#menu-list').outerHeight() - 20});});</script>
</div>




<footer>

    <div id="footer-map" >
        <div class="container">
            <div class="map-content ">
                <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=Nz0Q_oY0plOC0oFIenIzYExB59xTSujy&width=600&height=240"></script>		<div class="btn-group close-map">
                    <button type="button" class="btn btn-danger" onclick="toogleMap()"><i class="fa fa-times"></i> Закрыть</button>
                </div>
                <div class="glass"></div>
            </div>
            <div class="map-toogle" data-toggle="tooltip" data-trigger="hover" title="Развернуть схему проезда">
                <a id="mapToogle" onclick="toogleMap();">
                    <span class="glyphicon glyphicon-map-marker"></span>
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="footer-box">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <h5><i class="fa fa-info-circle"></i><span>Информация</span></h5>

                    <ul class="list-unstyled"><li><a href="#"><i class="fa fa-fa fa-angle-right"></i>  <span>О нас</span></a></li>
                        <li><a href="#"><i class="fa fa-fa fa-angle-right"></i>  <span>Доставка</span></a></li>
                        <li><a href="#"><i class="fa fa-fa fa-angle-right"></i>  <span>Политика Безопасности</span></a></li>
                        <li><a href="#"><i class="fa fa-fa fa-angle-right"></i>  <span>Условия соглашения</span></a></li></ul>
                    <hr class="visible-xs">
                </div>
                <div class="col-sm-6 col-md-3">
                    <h5><i class="fa fa-support"></i><span>Служба поддержки</span></h5>
                    <ul class="list-unstyled"><li><a href="#"><i class="fa fa-fa fa-angle-right"></i>  <span>Обратная связь</span></a></li>
                        <li><a href="#"><i class="fa fa-fa fa-angle-right"></i>  <span>Возврат товара</span></a></li>
                        <li><a href="#"><i class="fa fa-fa fa-angle-right"></i>  <span>Карта сайта</span></a></li></ul>                    <hr class="visible-xs">
                </div>
                <div class="clearfix visible-sm">&nbsp;</div>
                <div class="col-sm-6 col-md-3">
                    <h5><i class="glyphicon glyphicon-pushpin"></i><span>Дополнительно</span></h5>
                    <ul class="list-unstyled"><li><a href="/manufacturers"><i class="fa fa-fa fa-angle-right"></i>  <span>Производители</span></a></li>
                        <li><a href="#"><i class="fa fa-fa fa-angle-right"></i>  <span>Подарочные сертификаты</span></a></li>
                        <li><a href="#"><i class="fa fa-fa fa-angle-right"></i>  <span>Партнерская программа</span></a></li>
                        <li><a href="#"><i class="fa fa-fa fa-angle-right"></i>  <span>Акции</span></a></li></ul>
                    <hr class="visible-xs">
                </div>
                <div class="col-sm-6 col-md-3">
                    <h5><i class="glyphicon glyphicon-user"></i><span>Личный Кабинет</span></h5>
                    <ul class="list-unstyled"><li><a href="#"><i class="fa fa-fa fa-angle-right"></i>  <span>Личный Кабинет</span></a></li>
                        <li><a href="#"><i class="fa fa-fa fa-angle-right"></i>  <span>История заказов</span></a></li>
                        <li><a href="#"><i class="fa fa-fa fa-angle-right"></i>  <span>Закладки</span></a></li>
                        <li><a href="#"><i class="fa fa-fa fa-angle-right"></i>  <span>Рассылка</span></a></li></ul>                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    Работает на <a href="http://opencart-russia.ru">OpenCart "Русская сборка"</a><br /> Your Store &copy; 2017. Дизайн - <a href="http://xds.by/" target="_blank">XDS</a>			</div>
                <div class="col-sm-12 col-md-8 text-right-md">
                    <ul class="list-unstyled pay-icons">
                        <li>
                            <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/pay_icons/maestro-48x32.png" alt="Maestro" class="img-responsive" />
                        </li>
                        <li>
                            <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/pay_icons/mastercard-48x32.png" alt="MasterCard" class="img-responsive" />
                        </li>
                        <li>
                            <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/pay_icons/paypal-48x32.png" alt="PayPal" class="img-responsive" />
                        </li>
                        <li>
                            <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/pay_icons/qiwi-48x32.png" alt="QIWI" class="img-responsive" />
                        </li>
                        <li>
                            <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/pay_icons/robokassa-48x32.png" alt="Robokassa" class="img-responsive" />
                        </li>
                        <li>
                            <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/pay_icons/skrill-48x32.png" alt="Skrill" class="img-responsive" />
                        </li>
                        <li>
                            <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/pay_icons/visa-48x32.png" alt="Visa" class="img-responsive" />
                        </li>
                        <li>
                            <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/pay_icons/webmoney-48x32.png" alt="Webmoney" class="img-responsive" />
                        </li>
                        <li>
                            <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/pay_icons/yandexmoney-48x32.png" alt="YandexMoney" class="img-responsive" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <span id="scroll-top-button"><i class="fa fa-arrow-circle-up"></i></span>
    </div>
</footer>




<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>