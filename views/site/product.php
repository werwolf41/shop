<?php
/**
 * Created by PhpStorm.
 * User: krasn
 * Date: 12.06.2017
 * Time: 13:06
 */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\StringHelper;

?>
<div class="container" itemscope="" itemtype="http://schema.org/Product">
    <ul class="breadcrumb" prefix:v="http://rdf.data-vocabulary.org/#">
        <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=common/home"><i class="fa fa-home"></i></a></li>
        <li typeof="v:Breadcrumb"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20" rel="v:url" property="v:title">Компьютеры</a></li>
        <li class="active"> Смартфон HTC Windows Phone 8X</li>
    </ul>
    <h1 itemprop="name"> <?= $product->name?></h1>
    <div class="well well-sm">
        <div class="inline-info">
            <b>Производитель:</b> <?= Html::a($product->manufacturer->name, Url::to(['site/manufacturer', 'id'=>$product->manufacturer->id]), ['class'=>'red-link'])?>
        </div>
        <div class="inline-info">
            <b>Модель:</b> <span itemprop="model">Product 1</span>
        </div>
        <div class="inline-info">
            <b>Бонусные баллы:</b> 400		</div>
        <div class="inline-info-right">
			<span class="stars">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
											</span>
            <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click');  $('html, body').animate({ scrollTop: $('a[href=\'#tab-review\']').offset().top - 5}, 250); return false;">0 отзывов</a>
        </div>
    </div>


    <div class="row">
        <div id="content" class="col-sm-12">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-7">
                    <div class="row">



                        <div class="col-lg-6">
                            <div class="thumbnails">
                                <div class="main-image-wrapper">
                                    <a class="main-image" href="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/htc_touch_hd_1-800x800.jpg" title=" Смартфон HTC Windows Phone 8X" data-number="0">
                                        <img itemprop="image" src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/htc_touch_hd_1-380x380.jpg" title=" Смартфон HTC Windows Phone 8X" alt=" Смартфон HTC Windows Phone 8X" class="img-responsive center-block">
                                    </a>
                                </div>

                                <div class="images-additional">
                                    <a class="thumbnail" href="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/htc_touch_hd_1-800x800.jpg" title=" Смартфон HTC Windows Phone 8X">
                                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/htc_touch_hd_1-69x69.jpg" title=" Смартфон HTC Windows Phone 8X" alt=" Смартфон HTC Windows Phone 8X" data-number="0">
                                    </a>
                                    <a class="thumbnail" href="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/htc_touch_hd_3-800x800.jpg" title=" Смартфон HTC Windows Phone 8X">
                                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/htc_touch_hd_3-69x69.jpg" title=" Смартфон HTC Windows Phone 8X" alt=" Смартфон HTC Windows Phone 8X" data-number="1">
                                    </a>
                                    <a class="thumbnail" href="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/htc_touch_hd_2-800x800.jpg" title=" Смартфон HTC Windows Phone 8X">
                                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/htc_touch_hd_2-69x69.jpg" title=" Смартфон HTC Windows Phone 8X" alt=" Смартфон HTC Windows Phone 8X" data-number="2">
                                    </a>
                                </div>
                            </div>
                        </div>




                        <div class="col-lg-6 hidden-md hidden-sm hidden-xs">
                            <p><strong>Краткое описание</strong></p>
                            <p>
                               <?= StringHelper::truncate($product->description, 255)?> <a href="" class="red-link" onclick="$('a[href=\'#tab-description\']').trigger('click'); $('html, body').animate({ scrollTop: $('a[href=\'#tab-description\']').offset().top - 6}, 250); return false;">Читать полностью →</a></p>

                            <br>

                            <div class="social-likes social-likes_visible social-likes_ready" style="margin-bottom:20px;">
                                <div class="social-likes__widget social-likes__widget_facebook" title="Поделиться ссылкой на Facebook"><span class="social-likes__button social-likes__button_facebook"><span class="social-likes__icon social-likes__icon_facebook"></span>Facebook</span><span class="social-likes__counter social-likes__counter_facebook social-likes__counter_empty"></span></div>
                                <div class="social-likes__widget social-likes__widget_twitter" title="Поделиться ссылкой в Twitter"><span class="social-likes__button social-likes__button_twitter"><span class="social-likes__icon social-likes__icon_twitter"></span>Twitter</span><span class="social-likes__counter social-likes__counter_twitter social-likes__counter_empty"></span></div>
                                <div class="social-likes__widget social-likes__widget_vkontakte" title="Поделиться ссылкой во Вконтакте"><span class="social-likes__button social-likes__button_vkontakte"><span class="social-likes__icon social-likes__icon_vkontakte"></span>Вконтакте</span><span class="social-likes__counter social-likes__counter_vkontakte social-likes__counter_empty"></span></div>
                                <div class="social-likes__widget social-likes__widget_plusone" title="Поделиться ссылкой в Google+"><span class="social-likes__button social-likes__button_plusone"><span class="social-likes__icon social-likes__icon_plusone"></span>Google+</span><span class="social-likes__counter social-likes__counter_plusone social-likes__counter_empty"></span></div>
                            </div>

                        </div>


                    </div>


                </div>


                <div class="col-lg-3 col-md-4 col-sm-5" id="product">
                    <div class="panel panel-default">
                        <div class="panel-body">

                            <div class="btn-group pull-right">
                                <button type="button" data-toggle="tooltip" data-placement="top" class="btn btn-default" title="" onclick="wishlist.add('28');" data-original-title="В закладки"><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" data-placement="top" class="btn btn-default" title="" onclick="compare.add('28');" data-original-title="В сравнение"><i class="fa fa-bar-chart"></i></button>
                            </div>

                            <div class="price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                <meta itemprop="priceCurrency" content="USD">
                                <meta itemprop="price" content="100.00">
                                <div class="priceBig">
                                    <span>$ 100.00</span>
                                    <span class="points">Цена в бонусных баллах: <strong>200</strong></span>
                                </div>


                            </div>





                            <div class="alert-alt alert-success-alt">
                                <strong>Есть в наличии</strong>
                            </div>




                            <div class="options">


                            </div>
                            <div class="addcart">


                                <div class="row">

                                    <div class="col-lg-5 col-md-4 col-sm-12">
                                        <div class="input-group quantity" data-toggle="tooltip" title="" data-original-title="Количество">

								<span class="input-group-addon quantity-plus-minus">
									<button type="button" id="plus" class="btn">+</button>
									<button type="button" id="minus" class="btn">−</button>
								</span>

                                            <input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control">


                                        </div>
                                        <input type="hidden" name="product_id" value="28">
                                    </div>
                                    <div class="col-lg-7  col-md-8 col-sm-12">

                                        <div class="btn-group btn-block addtocart-group">

                                            <button type="button" id="button-cart" data-loading-text="Загрузка..." class="btn btn-danger btn-block">Купить</button>
                                            <button class="btn btn-danger" id="button-fastorder" onclick="fastorder('28');" title="Быстрый заказ"><i class="fa fa-bolt"></i></button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-12">




                    <ul class="nav nav-tabs product-tabs">
                        <li class="active"><a href="#tab-description" data-toggle="tab"><i class="fa fa-file-text-o"></i><span class="hidden-xs">&nbsp;&nbsp;Описание</span></a></li>
                        <li><a href="#tab-review" data-toggle="tab"><i class="fa fa-comment-o"></i><span class="hidden-xs">&nbsp;&nbsp;Отзывов (0)</span></a></li>
                    </ul>

                    <div class="tab-content">

                        <div class="tab-pane active red-links" id="tab-description" itemprop="description">
                            <?= $product->description?>
                        </div>







                        <div class="tab-pane" id="tab-review">
                            <a class="btn btn-default" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><i class="fa fa-pencil"></i>&nbsp;&nbsp;Написать отзыв</a>
                            <br><br>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <div class="well riview-helper">
                                    <form class="form-horizontal" id="review-form">
                                        <div class="form-group required">
                                            <label class="col-sm-2 control-label" for="input-name">Ваше имя:</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="name" value="" id="input-name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <label class="col-sm-2 control-label" for="input-review">Ваш отзыв:</label>
                                            <div class="col-sm-10">
                                                <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <!-- <div class="form-group">
                                            <div class="col-sm-10 col-sm-offset-2">
                                                <span style="color: #FF0000;">Примечание:</span> HTML разметка не поддерживается! Используйте обычный текст.												</div>
                                        </div> -->
                                        <div class="form-group required">
                                            <label class="col-sm-2 control-label">Оценка:</label>
                                            <div class="col-sm-10">
                                                <div class="prod-rat">
                                                    <input id="rat1" type="radio" name="rating" value="1"><label class="rat-star" for="rat1"><i class="fa fa-star"></i></label>
                                                    <input id="rat2" type="radio" name="rating" value="2"><label class="rat-star" for="rat2"><i class="fa fa-star"></i></label>
                                                    <input id="rat3" type="radio" name="rating" value="3"><label class="rat-star" for="rat3"><i class="fa fa-star"></i></label>
                                                    <input id="rat4" type="radio" name="rating" value="4"><label class="rat-star" for="rat4"><i class="fa fa-star"></i></label>
                                                    <input id="rat5" type="radio" name="rating" value="5"><label class="rat-star" for="rat5"><i class="fa fa-star"></i></label>
                                                </div>
                                                <script>
                                                    $('.rat-star').hover(function () {
                                                        $(this).prevAll('.rat-star').addClass('active');
                                                        $(this).addClass('active');
                                                    },function () {
                                                        $(this).prevAll('.rat-star').removeClass('active');
                                                        $(this).removeClass('active');
                                                    });

                                                    $('.rat-star').click(function(){
                                                        $('.rat-star').each(function(){
                                                            $(this).removeClass('checked');
                                                            $(this).prevAll('.rat-star').removeClass('checked');
                                                        });

                                                        $(this).addClass('checked');
                                                        $(this).prevAll('.rat-star').addClass('checked');
                                                    });

                                                </script>
                                            </div>
                                        </div>

                                        <script src="//www.google.com/recaptcha/api.js" type="text/javascript"></script>

                                        <div class="form-group required">
                                            <label class="col-sm-2 control-label">Введите код в поле ниже</label>
                                            <div class="col-sm-10">
                                                <div class="g-recaptcha" data-sitekey="6Lea3CITAAAAAMrYNtTplzsBA2wrtpO90ZhSob2V"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?k=6Lea3CITAAAAAMrYNtTplzsBA2wrtpO90ZhSob2V&amp;co=aHR0cDovL2NvbG9yaW5nLnhkcy5ieTo4MA..&amp;hl=ru&amp;v=r20170606154550&amp;size=normal&amp;cb=sm5hdh361274" title="виджет reCAPTCHA" width="304" height="78" frameborder="0" scrolling="no" name="undefined"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; "></textarea></div></div>
                                            </div>
                                        </div>



                                        <div class="form-group" style="margin-bottom: 0;">
                                            <div class="col-sm-10 col-sm-offset-2">
                                                <button type="button" id="button-review" data-loading-text="Загрузка..." class="btn btn-primary">Отправить отзыв</button>
                                            </div>
                                        </div>



                                    </form>
                                </div>
                            </div>
                            <div id="review"><p>Нет отзывов о данном товаре.</p>
                            </div>

                        </div>

                    </div>




                </div>
            </div>
        </div>

        <div class="col-sm-12">
        </div>
    </div>
</div>
