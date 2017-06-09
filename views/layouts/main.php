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
                    <ul id="menu-list" class="dropdown-menu">
                        <li class="">
							<span class="toggle-child">
								<i class="fa fa-plus plus"></i>
								<i class="fa fa-minus minus"></i>
							</span>
                            <a class="with-child">
                                <i class="fa fa-angle-right arrow"></i>


                                <img class="icon peace-icon with-hover" src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/category_icons/complectu-24x24.png" alt="Комплектующие 1" />
                                <img class="icon hover-icon" src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/category_icons/hover/complectu-hover-24x24.png" alt="Комплектующие 2" />


                                Аквариумистика
                                <span class="mobilink hidden-lg hidden-md" onclick="location.href='/category?alias=akvariumistika'" ></span>
                            </a>
                            <div class="child-box box-col-1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="child-box-cell">
                                            <div class="h5">
																				<span class="toggle-child2">
											<i class="fa fa-plus plus"></i>
											<i class="fa fa-minus minus"></i>
										</span>
                                                <a href="/category?alias=akvariumi" class="with-child2">


                                                    <span class="livel-down hidden-md hidden-lg">&#8627;</span>Аквариумы</a></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="child-box-cell">
                                            <div class="h5">
																				<span class="toggle-child2">
											<i class="fa fa-plus plus"></i>
											<i class="fa fa-minus minus"></i>
										</span>
                                                <a href="/category?alias=tumbi__podstavki" class="with-child2">


                                                    <span class="livel-down hidden-md hidden-lg">&#8627;</span>Тумбы (подставки)</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="see-all-categories hidden-xs hidden-sm">
                                    <a href="/category?alias=akvariumistika">Смотреть Все&nbsp;Аквариумистика</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div id="menuMask"></div>
                    <script>$('#menu-list').hover(function () {$('body').addClass('blured')},function () {$('body').removeClass('blured')});</script>
                </nav>
            </div>        </div>
    </div>
</header>









<div class="content-wrapper"><div class="container">
        <div class="row">
            <div class="col-md-3"><div id="menu-home-helper"></div></div>
            <div class="col-md-9"><div id="slideshow0" class="slideshow" style="max-height:313px;">
                    <div>
                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/banners/slide2-848x311.png" alt="MacBookAir" />
                        <a href="index.php?route=product/product&amp;path=57&amp;product_id=49"><img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/banners/slide1-848x311.png" alt="iPhone 6" /></a>
                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/banners/slide3-848x311.png" alt="Слайд 1" />
                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/banners/slide4-848x311.png" alt="Слайд 2" />
                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/banners/slide7-848x311.png" alt="Слайд 3" />
                    </div>
                </div>
                <script type="text/javascript"><!--
                    $(document).ready(function () {
                        $('#slideshow0 > div').nivoSlider({
                            effect: 'fade',               // Specify sets like: 'fold,fade,sliceDown'
                            animSpeed: 400,                 // Slide transition speed
                            pauseTime: 6000,                // How long each slide will show
                            startSlide: 0,                  // Set starting Slide (0 index)
                            directionNav: true,             // Next & Prev navigation
                            controlNav: true,               // 1,2,3... navigation
                            controlNavThumbs: false,        // Use thumbnails for Control Nav
                            pauseOnHover: true,             // Stop animation while hovering
                            manualAdvance: false,           // Force manual transitions
                            prevText: ' ',               // Prev directionNav text
                            nextText: ' ',               // Next directionNav text
                            randomStart: false,             // Start on a random slide
                            beforeChange: function(){},     // Triggers before a slide transition
                            afterChange: function(){},      // Triggers after a slide transition
                            slideshowEnd: function(){},     // Triggers after all slides have been shown
                            lastSlide: function(){},        // Triggers when last slide is shown
                            afterLoad: function(){}         // Triggers when slider has loaded
                        });
                    });
                    --></script><div class="row custom-blocks">
                    <div class="col-sm-4">
                        <div class="custom-block">
                            <a href="#">
                                <div class="image">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/blocks_icons/01-50x50.png" alt="Защита заказов" />
                                </div>
                                <div class="text">
                                    <div class="title">Защита заказов</div>
                                    <p>Мы страхуем каждую вашу покупку!</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="custom-block">
                            <a href="#">
                                <div class="image">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/blocks_icons/02-50x50.png" alt="Доставка" />
                                </div>
                                <div class="text">
                                    <div class="title">Доставка</div>
                                    <p>Мы отправим ваш заказ в любую точку мира</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="custom-block">
                            <a href="#">
                                <div class="image">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/blocks_icons/03-50x50.png" alt="Поддержка 24/7" />
                                </div>
                                <div class="text">
                                    <div class="title">Поддержка 24/7</div>
                                    <p>У вас возникли вопросы? Мы всегда на связи!</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div></div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-md-9">
                <div class="panel panel-default box-product">
                    <div class="panel-heading">Мы рекомендуем</div>
                    <div id="xds-featured0" class="panel-body">
                        <div class="product-item">
                            <div class="image">
                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=47">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/hp_1-180x180.jpg" alt="Ноутбук HP ENVY TouchSmart 15-j000 (AMD)" title="Ноутбук HP ENVY TouchSmart 15-j000 (AMD)" class="img-responsive" />
                                </a>
                            </div>
                            <div class="caption">
                                <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=47">Ноутбук HP ENVY TouchSmart 15-j000 (AMD)</a></div>
                                <div class="price">
                                    $ 100.00														</div>
                            </div>
                            <div class="buttons">
                                <div class="btn-group dropup">
                                    <button type="button" class="btn btn-addtocart" onclick="cart.add('47');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                    <button class="btn btn-addtocart" onclick="qview('47')" data-toggle="tooltip" title="Быстрый просмотр">
                                        <i class="fa fa-eye fa-fw"></i>
                                    </button>
                                    <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-angle-down caretalt"></i>
                                    </button>
                                    <ul class="dropdown-menu addtocart-additional">
                                        <li><a onclick="fastorder('47')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                        <li><a onclick="wishlist.add('47');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                        <li><a rel="nofollow" onclick="compare.add('47');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="image">
                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=42">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/apple_cinema_30-180x180.jpg" alt="Монитор Apple Thunderbolt Display 27&quot; (MC914)" title="Монитор Apple Thunderbolt Display 27&quot; (MC914)" class="img-responsive" />
                                </a>
                                <div class="sticker st-sale " >-10&#37;
                                </div>
                            </div>
                            <div class="caption">
                                <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=42">Монитор Apple Thunderbolt Display 27&quot; (MC914)</a></div>
                                <div class="price">
                                    <span class="price-old">&nbsp;$ 100.00&nbsp;</span> <span class="price-new">$ 90.00</span>
                                </div>
                            </div>
                            <div class="buttons">
                                <div class="btn-group dropup">
                                    <button type="button" class="btn btn-addtocart" onclick="cart.add('42');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                    <button class="btn btn-addtocart" onclick="qview('42')" data-toggle="tooltip" title="Быстрый просмотр">
                                        <i class="fa fa-eye fa-fw"></i>
                                    </button>
                                    <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-angle-down caretalt"></i>
                                    </button>
                                    <ul class="dropdown-menu addtocart-additional">
                                        <li><a onclick="fastorder('42')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                        <li><a onclick="wishlist.add('42');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                        <li><a rel="nofollow" onclick="compare.add('42');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="image">
                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=28">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/htc_touch_hd_1-180x180.jpg" alt=" Смартфон HTC Windows Phone 8X" title=" Смартфон HTC Windows Phone 8X" class="img-responsive" />
                                </a>
                            </div>
                            <div class="caption">
                                <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=28"> Смартфон HTC Windows Phone 8X</a></div>
                                <div class="price">
                                    $ 100.00														</div>
                            </div>
                            <div class="buttons">
                                <div class="btn-group dropup">
                                    <button type="button" class="btn btn-addtocart" onclick="cart.add('28');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                    <button class="btn btn-addtocart" onclick="qview('28')" data-toggle="tooltip" title="Быстрый просмотр">
                                        <i class="fa fa-eye fa-fw"></i>
                                    </button>
                                    <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-angle-down caretalt"></i>
                                    </button>
                                    <ul class="dropdown-menu addtocart-additional">
                                        <li><a onclick="fastorder('28')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                        <li><a onclick="wishlist.add('28');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                        <li><a rel="nofollow" onclick="compare.add('28');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="image">
                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=30">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/canon_eos_5d_1-180x180.jpg" alt="Камера Canon EOS 5D Mark III Kit 24-105 IS" title="Камера Canon EOS 5D Mark III Kit 24-105 IS" class="img-responsive" />
                                </a>
                                <div class="sticker st-sale " >-20&#37;
                                </div>
                            </div>
                            <div class="caption">
                                <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=30">Камера Canon EOS 5D Mark III Kit 24-105 IS</a></div>
                                <div class="price">
                                    <span class="price-old">&nbsp;$ 100.00&nbsp;</span> <span class="price-new">$ 80.00</span>
                                </div>
                            </div>
                            <div class="buttons">
                                <div class="btn-group dropup">
                                    <button type="button" class="btn btn-addtocart" onclick="cart.add('30');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                    <button class="btn btn-addtocart" onclick="qview('30')" data-toggle="tooltip" title="Быстрый просмотр">
                                        <i class="fa fa-eye fa-fw"></i>
                                    </button>
                                    <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-angle-down caretalt"></i>
                                    </button>
                                    <ul class="dropdown-menu addtocart-additional">
                                        <li><a onclick="fastorder('30')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                        <li><a onclick="wishlist.add('30');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                        <li><a rel="nofollow" onclick="compare.add('30');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="image">
                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=41">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/imac_1-180x180.jpg" alt="Моноблок Apple iMac 21.5'' (ME087C116GRU/A)" title="Моноблок Apple iMac 21.5'' (ME087C116GRU/A)" class="img-responsive" />
                                </a>
                            </div>
                            <div class="caption">
                                <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=41">Моноблок Apple iMac 21.5'' (ME087C116GRU/A)</a></div>
                                <div class="price">
                                    $ 100.00														</div>
                            </div>
                            <div class="buttons">
                                <div class="btn-group dropup">
                                    <button type="button" class="btn btn-addtocart" onclick="cart.add('41');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                    <button class="btn btn-addtocart" onclick="qview('41')" data-toggle="tooltip" title="Быстрый просмотр">
                                        <i class="fa fa-eye fa-fw"></i>
                                    </button>
                                    <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-angle-down caretalt"></i>
                                    </button>
                                    <ul class="dropdown-menu addtocart-additional">
                                        <li><a onclick="fastorder('41')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                        <li><a onclick="wishlist.add('41');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                        <li><a rel="nofollow" onclick="compare.add('41');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $('#xds-featured0').owlCarousel({
                            responsiveBaseWidth: '#xds-featured0',
                            itemsCustom: [[0, 1], [448, 2], [668, 3], [848, 4], [1000, 5]],
                            theme: 'product-carousel',
                            navigation: true,
                            slideSpeed: 200,
                            paginationSpeed: 300,
                            stopOnHover: true,
                            touchDrag: true,
                            mouseDrag: false,
                            navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
                            pagination: false,
                            autoPlay: 45000								});
                    </script>
                </div>		</div>
            <div id="column-right" class="col-sm-4 col-md-3">
                <div class="visible-xs text-right col-show-button">
                    <a class="btn btn-default btn-block" id="show-modules-col-right"><i class="fa fa-eye show-icon"></i><i class="fa fa-eye-slash hid-icon"></i> Правая колонка</a>
                </div>
                <div id="col-right-modules" class="hid-col-right">
                    <div class="panel panel-default box-product">
                        <div class="panel-heading">Товары со скидками</div>
                        <div id="xds-special0" class="panel-body">
                            <div class="product-item">
                                <div class="image">
                                    <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=42">
                                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/apple_cinema_30-180x180.jpg" alt="Монитор Apple Thunderbolt Display 27&quot; (MC914)" title="Монитор Apple Thunderbolt Display 27&quot; (MC914)" class="img-responsive" />
                                    </a>
                                    <div class="sticker st-sale " >-10&#37;</div>
                                </div>
                                <div class="caption">
                                    <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=42">Монитор Apple Thunderbolt Display 27&quot; (MC914)</a></div>
                                    <div class="price">
                                        <span class="price-old">&nbsp;$ 100.00&nbsp;</span> <span class="price-new">$ 90.00</span>
                                    </div>
                                </div>
                                <div class="buttons">
                                    <div class="btn-group dropup">
                                        <button type="button" class="btn btn-addtocart" onclick="cart.add('42');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                        <button class="btn btn-addtocart" onclick="qview('42')" data-toggle="tooltip" title="Быстрый просмотр">
                                            <i class="fa fa-eye fa-fw"></i>
                                        </button>
                                        <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-angle-down caretalt"></i>
                                        </button>
                                        <ul class="dropdown-menu addtocart-additional">
                                            <li><a onclick="fastorder('42')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                            <li><a onclick="wishlist.add('42');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                            <li><a rel="nofollow" onclick="compare.add('42');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="image">
                                    <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=30">
                                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/canon_eos_5d_1-180x180.jpg" alt="Камера Canon EOS 5D Mark III Kit 24-105 IS" title="Камера Canon EOS 5D Mark III Kit 24-105 IS" class="img-responsive" />
                                    </a>
                                    <div class="sticker st-sale " >-20&#37;</div>
                                </div>
                                <div class="caption">
                                    <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=30">Камера Canon EOS 5D Mark III Kit 24-105 IS</a></div>
                                    <div class="price">
                                        <span class="price-old">&nbsp;$ 100.00&nbsp;</span> <span class="price-new">$ 80.00</span>
                                    </div>
                                </div>
                                <div class="buttons">
                                    <div class="btn-group dropup">
                                        <button type="button" class="btn btn-addtocart" onclick="cart.add('30');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                        <button class="btn btn-addtocart" onclick="qview('30')" data-toggle="tooltip" title="Быстрый просмотр">
                                            <i class="fa fa-eye fa-fw"></i>
                                        </button>
                                        <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-angle-down caretalt"></i>
                                        </button>
                                        <ul class="dropdown-menu addtocart-additional">
                                            <li><a onclick="fastorder('30')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                            <li><a onclick="wishlist.add('30');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                            <li><a rel="nofollow" onclick="compare.add('30');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            $(document).ready(function () {
                                $('#xds-special0').owlCarousel({
                                    responsiveBaseWidth: '#xds-special0',
                                    itemsCustom: [[0, 1], [448, 2], [668, 3], [848, 4], [1000, 5]],
                                    theme: 'product-carousel',
                                    navigation: true,
                                    slideSpeed: 200,
                                    paginationSpeed: 300,
                                    stopOnHover: true,
                                    touchDrag: true,
                                    mouseDrag: false,
                                    navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
                                    pagination: false,
                                    autoPlay: 50000								});
                            });
                        </script>
                    </div>			</div>
            </div>
            <script>
                $('#show-modules-col-right').click(function () {
                    $('#col-right-modules').toggleClass('show');
                    $(this).toggleClass('open');
                });
            </script>
        </div>
        <div class="row">
            <div class="col-sm-8 col-md-9" id="home_position_3">
                <div class="panel panel-default box-product">
                    <div class="panel-heading">Последние поступления</div>
                    <div id="xds-latest0" class="panel-body">
                        <div class="product-item">
                            <div class="image">
                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=49">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/samsung_tab_1-180x180.jpg" alt="Планшет Samsung Galaxy Tab 10.1 Miix 3-830 32Gb Black" title="Планшет Samsung Galaxy Tab 10.1 Miix 3-830 32Gb Black" class="img-responsive" />
                                </a>
                            </div>
                            <div class="caption">
                                <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=49">Планшет Samsung Galaxy Tab 10.1 Miix 3-830 32Gb Black</a></div>
                                <div class="price">
                                    $ 199.99														</div>
                            </div>
                            <div class="buttons">
                                <div class="btn-group dropup">
                                    <button type="button" class="btn btn-addtocart" onclick="cart.add('49');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                    <button class="btn btn-addtocart" onclick="qview('49')" data-toggle="tooltip" title="Быстрый просмотр">
                                        <i class="fa fa-eye fa-fw"></i>
                                    </button>
                                    <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-angle-down caretalt"></i>
                                    </button>
                                    <ul class="dropdown-menu addtocart-additional">
                                        <li><a onclick="fastorder('49')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                        <li><a onclick="wishlist.add('49');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                        <li><a rel="nofollow" onclick="compare.add('49');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="image">
                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=48">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/ipod_classic_1-180x180.jpg" alt="MP3 плеер Apple iPod classic 160Gb" title="MP3 плеер Apple iPod classic 160Gb" class="img-responsive" />
                                </a>
                            </div>
                            <div class="caption">
                                <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=48">MP3 плеер Apple iPod classic 160Gb</a></div>
                                <div class="price">
                                    $ 100.00														</div>
                            </div>
                            <div class="buttons">
                                <div class="btn-group dropup">
                                    <button type="button" class="btn btn-addtocart" onclick="cart.add('48');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                    <button class="btn btn-addtocart" onclick="qview('48')" data-toggle="tooltip" title="Быстрый просмотр">
                                        <i class="fa fa-eye fa-fw"></i>
                                    </button>
                                    <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-angle-down caretalt"></i>
                                    </button>
                                    <ul class="dropdown-menu addtocart-additional">
                                        <li><a onclick="fastorder('48')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                        <li><a onclick="wishlist.add('48');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                        <li><a rel="nofollow" onclick="compare.add('48');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="image">
                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=47">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/hp_1-180x180.jpg" alt="Ноутбук HP ENVY TouchSmart 15-j000 (AMD)" title="Ноутбук HP ENVY TouchSmart 15-j000 (AMD)" class="img-responsive" />
                                </a>
                            </div>
                            <div class="caption">
                                <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=47">Ноутбук HP ENVY TouchSmart 15-j000 (AMD)</a></div>
                                <div class="price">
                                    $ 100.00														</div>
                            </div>
                            <div class="buttons">
                                <div class="btn-group dropup">
                                    <button type="button" class="btn btn-addtocart" onclick="cart.add('47');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                    <button class="btn btn-addtocart" onclick="qview('47')" data-toggle="tooltip" title="Быстрый просмотр">
                                        <i class="fa fa-eye fa-fw"></i>
                                    </button>
                                    <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-angle-down caretalt"></i>
                                    </button>
                                    <ul class="dropdown-menu addtocart-additional">
                                        <li><a onclick="fastorder('47')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                        <li><a onclick="wishlist.add('47');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                        <li><a rel="nofollow" onclick="compare.add('47');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="image">
                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=46">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/sony_vaio_1-180x180.jpg" alt="Ноутбук Sony VAIO Tap 11 SVT1122X9RW" title="Ноутбук Sony VAIO Tap 11 SVT1122X9RW" class="img-responsive" />
                                </a>
                            </div>
                            <div class="caption">
                                <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=46">Ноутбук Sony VAIO Tap 11 SVT1122X9RW</a></div>
                                <div class="price">
                                    $ 1000.00														</div>
                            </div>
                            <div class="buttons">
                                <div class="btn-group dropup">
                                    <button type="button" class="btn btn-addtocart" onclick="cart.add('46');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                    <button class="btn btn-addtocart" onclick="qview('46')" data-toggle="tooltip" title="Быстрый просмотр">
                                        <i class="fa fa-eye fa-fw"></i>
                                    </button>
                                    <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-angle-down caretalt"></i>
                                    </button>
                                    <ul class="dropdown-menu addtocart-additional">
                                        <li><a onclick="fastorder('46')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                        <li><a onclick="wishlist.add('46');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                        <li><a rel="nofollow" onclick="compare.add('46');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="image">
                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=45">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/macbook_pro_1-180x180.jpg" alt="Ноутбук Apple MacBook Pro 15'' Retina (MC975ZH/A)" title="Ноутбук Apple MacBook Pro 15'' Retina (MC975ZH/A)" class="img-responsive" />
                                </a>
                            </div>
                            <div class="caption">
                                <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=45">Ноутбук Apple MacBook Pro 15'' Retina (MC975ZH/A)</a></div>
                                <div class="price">
                                    $ 2000.00														</div>
                            </div>
                            <div class="buttons">
                                <div class="btn-group dropup">
                                    <button type="button" class="btn btn-addtocart" onclick="cart.add('45');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                    <button class="btn btn-addtocart" onclick="qview('45')" data-toggle="tooltip" title="Быстрый просмотр">
                                        <i class="fa fa-eye fa-fw"></i>
                                    </button>
                                    <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-angle-down caretalt"></i>
                                    </button>
                                    <ul class="dropdown-menu addtocart-additional">
                                        <li><a onclick="fastorder('45')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                        <li><a onclick="wishlist.add('45');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                        <li><a rel="nofollow" onclick="compare.add('45');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $('#xds-latest0').owlCarousel({
                            responsiveBaseWidth: '#xds-latest0',
                            itemsCustom: [[0, 1], [448, 2], [668, 3], [848, 4], [1000, 5]],
                            theme: 'product-carousel',
                            navigation: true,
                            slideSpeed: 200,
                            paginationSpeed: 300,
                            stopOnHover: true,
                            touchDrag: true,
                            mouseDrag: false,
                            navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
                            pagination: false,
                            autoPlay: 40000								});



                    </script>
                </div>					</div>
            <div class="col-sm-4 col-md-3" id="home_position_4">
                <div class="panel panel-default box-product">
                    <div class="panel-heading">Хиты продаж</div>
                    <div id="xds-bestseller0" class="panel-body">
                        <div class="product-item">
                            <div class="image">
                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=31">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/nikon_d300_1-180x180.jpg" alt="Камера Nikon D3000 Kit 18-55mm VR" title="Камера Nikon D3000 Kit 18-55mm VR" class="img-responsive" />
                                </a>
                            </div>
                            <div class="caption">
                                <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=31">Камера Nikon D3000 Kit 18-55mm VR</a></div>
                                <div class="price">
                                    $ 80.00														</div>
                            </div>
                            <div class="buttons">
                                <div class="btn-group dropup">
                                    <button type="button" class="btn btn-addtocart" onclick="cart.add('31');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                    <button class="btn btn-addtocart" onclick="qview('31')" data-toggle="tooltip" title="Быстрый просмотр">
                                        <i class="fa fa-eye fa-fw"></i>
                                    </button>
                                    <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-angle-down caretalt"></i>
                                    </button>
                                    <ul class="dropdown-menu addtocart-additional">
                                        <li><a onclick="fastorder('31')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                        <li><a onclick="wishlist.add('31');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                        <li><a rel="nofollow" onclick="compare.add('31');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="image">
                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=48">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/ipod_classic_1-180x180.jpg" alt="MP3 плеер Apple iPod classic 160Gb" title="MP3 плеер Apple iPod classic 160Gb" class="img-responsive" />
                                </a>
                            </div>
                            <div class="caption">
                                <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=48">MP3 плеер Apple iPod classic 160Gb</a></div>
                                <div class="price">
                                    $ 100.00														</div>
                            </div>
                            <div class="buttons">
                                <div class="btn-group dropup">
                                    <button type="button" class="btn btn-addtocart" onclick="cart.add('48');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                    <button class="btn btn-addtocart" onclick="qview('48')" data-toggle="tooltip" title="Быстрый просмотр">
                                        <i class="fa fa-eye fa-fw"></i>
                                    </button>
                                    <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-angle-down caretalt"></i>
                                    </button>
                                    <ul class="dropdown-menu addtocart-additional">
                                        <li><a onclick="fastorder('48')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                        <li><a onclick="wishlist.add('48');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                        <li><a rel="nofollow" onclick="compare.add('48');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="image">
                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=41">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/imac_1-180x180.jpg" alt="Моноблок Apple iMac 21.5'' (ME087C116GRU/A)" title="Моноблок Apple iMac 21.5'' (ME087C116GRU/A)" class="img-responsive" />
                                </a>
                            </div>
                            <div class="caption">
                                <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=41">Моноблок Apple iMac 21.5'' (ME087C116GRU/A)</a></div>
                                <div class="price">
                                    $ 100.00														</div>
                            </div>
                            <div class="buttons">
                                <div class="btn-group dropup">
                                    <button type="button" class="btn btn-addtocart" onclick="cart.add('41');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                    <button class="btn btn-addtocart" onclick="qview('41')" data-toggle="tooltip" title="Быстрый просмотр">
                                        <i class="fa fa-eye fa-fw"></i>
                                    </button>
                                    <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-angle-down caretalt"></i>
                                    </button>
                                    <ul class="dropdown-menu addtocart-additional">
                                        <li><a onclick="fastorder('41')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                        <li><a onclick="wishlist.add('41');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                        <li><a rel="nofollow" onclick="compare.add('41');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="image">
                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=40">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/iphone_1-180x180.jpg" alt="Смартфон Apple iPhone 6 Plus (16Gb)" title="Смартфон Apple iPhone 6 Plus (16Gb)" class="img-responsive" />
                                </a>
                            </div>
                            <div class="caption">
                                <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=40">Смартфон Apple iPhone 6 Plus (16Gb)</a></div>
                                <div class="price">
                                    $ 101.00														</div>
                            </div>
                            <div class="buttons">
                                <div class="btn-group dropup">
                                    <button type="button" class="btn btn-addtocart" onclick="cart.add('40');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                    <button class="btn btn-addtocart" onclick="qview('40')" data-toggle="tooltip" title="Быстрый просмотр">
                                        <i class="fa fa-eye fa-fw"></i>
                                    </button>
                                    <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-angle-down caretalt"></i>
                                    </button>
                                    <ul class="dropdown-menu addtocart-additional">
                                        <li><a onclick="fastorder('40')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                        <li><a onclick="wishlist.add('40');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                        <li><a rel="nofollow" onclick="compare.add('40');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="image">
                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=28">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/htc_touch_hd_1-180x180.jpg" alt=" Смартфон HTC Windows Phone 8X" title=" Смартфон HTC Windows Phone 8X" class="img-responsive" />
                                </a>
                            </div>
                            <div class="caption">
                                <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=28"> Смартфон HTC Windows Phone 8X</a></div>
                                <div class="price">
                                    $ 100.00														</div>
                            </div>
                            <div class="buttons">
                                <div class="btn-group dropup">
                                    <button type="button" class="btn btn-addtocart" onclick="cart.add('28');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                    <button class="btn btn-addtocart" onclick="qview('28')" data-toggle="tooltip" title="Быстрый просмотр">
                                        <i class="fa fa-eye fa-fw"></i>
                                    </button>
                                    <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-angle-down caretalt"></i>
                                    </button>
                                    <ul class="dropdown-menu addtocart-additional">
                                        <li><a onclick="fastorder('28')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                        <li><a onclick="wishlist.add('28');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                        <li><a rel="nofollow" onclick="compare.add('28');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#xds-bestseller0').owlCarousel({
                                responsiveBaseWidth: '#xds-bestseller0',
                                itemsCustom: [[0, 1], [448, 2], [668, 3], [848, 4], [1000, 5]],
                                theme: 'product-carousel',
                                navigation: true,
                                slideSpeed: 200,
                                paginationSpeed: 300,
                                stopOnHover: true,
                                touchDrag: true,
                                mouseDrag: false,
                                navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
                                pagination: false,
                                autoPlay: 30000								});
                        });

                    </script>
                </div>					</div>
        </div>
        <div class="row">
            <div class="col-sm-12" id="home_position_5">
                <div id="carousel0" class="carousel">
                    <div class="item text-center">
                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/manufacturer/nfl-130x100.png" alt="NFL" class="img-responsive" />
                    </div>
                    <div class="item text-center">
                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/manufacturer/starbucks-130x100.png" alt="Starbucks" class="img-responsive" />
                    </div>
                    <div class="item text-center">
                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/manufacturer/disney-130x100.png" alt="Disney" class="img-responsive" />
                    </div>
                    <div class="item text-center">
                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/manufacturer/dell-130x100.png" alt="Dell" class="img-responsive" />
                    </div>
                    <div class="item text-center">
                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/manufacturer/harley-130x100.png" alt="Harley Davidson" class="img-responsive" />
                    </div>
                    <div class="item text-center">
                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/manufacturer/canon-130x100.png" alt="Canon" class="img-responsive" />
                    </div>
                    <div class="item text-center">
                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/manufacturer/burgerking-130x100.png" alt="Burger King" class="img-responsive" />
                    </div>
                    <div class="item text-center">
                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/manufacturer/cocacola-130x100.png" alt="Coca Cola" class="img-responsive" />
                    </div>
                    <div class="item text-center">
                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/manufacturer/sony-130x100.png" alt="Sony" class="img-responsive" />
                    </div>
                    <div class="item text-center">
                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/manufacturer/redbull-130x100.png" alt="RedBull" class="img-responsive" />
                    </div>
                    <div class="item text-center">
                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/manufacturer/nintendo-130x100.png" alt="Nintendo" class="img-responsive" />
                    </div>
                </div>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $('#carousel0').owlCarousel({
                            items: 6,
                            autoPlay: 3000,
                            navigation: true,
                            theme: 'carousel',
                            navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
                            pagination: false
                        });
                    });
                </script>				</div>
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