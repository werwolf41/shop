<?php
/**
 * Created by PhpStorm.
 * User: krasn
 * Date: 12.06.2017
 * Time: 11:50
 */



use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\StringHelper;


?>

<ul class="breadcrumb">
    <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=common/home"><i class="fa fa-home"></i></a></li>
    <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer">Производитель</a></li>
    <li class="active"><?=mb_convert_case ( $manufacturer->name, MB_CASE_TITLE)?></li>
</ul>
<h1><?=mb_convert_case ( $manufacturer->name, MB_CASE_TITLE)?></h1>
<div class="row">    		            <div id="content" class="col-sm-12">
        <div class="row">
            <div class="col-lg-12 products-filter">
                <div class="btn-group">
                    <div class="btn-group">
                        <button type="button" id="grid-view" class="btn btn-default active">
                            <i class="fa fa-th fa-fw"></i><span class="hidden-xs "> Сетка</span>
                        </button>
                    </div>
                    <div class="btn-group">
                        <button type="button" id="list-view" class="btn btn-default">
                            <i class="fa fa-th-list fa-fw"></i><span class="hidden-xs "> Список</span>
                        </button>
                    </div>
                </div>
                <div class="btn-group pull-right">
                    <div class="btn-group" title="Сортировка:" id="sort-button">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-sort"></i>&nbsp;&nbsp;
                            <span class="hidden-xs  button-text">По умолчанию&nbsp;&nbsp;</span><i class="fa fa-angle-down caretalt"></i>
                        </button>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer/info&amp;manufacturer_id=8&amp;sort=p.sort_order&amp;order=ASC&amp;limit=12"><b>По умолчанию</b></a></li>
                            <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer/info&amp;manufacturer_id=8&amp;sort=pd.name&amp;order=ASC&amp;limit=12">Название (А - Я)</a></li>
                            <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer/info&amp;manufacturer_id=8&amp;sort=pd.name&amp;order=DESC&amp;limit=12">Название (Я - А)</a></li>
                            <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer/info&amp;manufacturer_id=8&amp;sort=p.price&amp;order=ASC&amp;limit=12">Цена (низкая &gt; высокая)</a></li>
                            <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer/info&amp;manufacturer_id=8&amp;sort=p.price&amp;order=DESC&amp;limit=12">Цена (высокая &gt; низкая)</a></li>
                            <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer/info&amp;manufacturer_id=8&amp;sort=rating&amp;order=DESC&amp;limit=12">Рейтинг (начиная с высокого)</a></li>
                            <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer/info&amp;manufacturer_id=8&amp;sort=rating&amp;order=ASC&amp;limit=12">Рейтинг (начиная с низкого)</a></li>
                            <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer/info&amp;manufacturer_id=8&amp;sort=p.model&amp;order=ASC&amp;limit=12">Модель (А - Я)</a></li>
                            <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer/info&amp;manufacturer_id=8&amp;sort=p.model&amp;order=DESC&amp;limit=12">Модель (Я - А)</a></li>
                            <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer/info&amp;manufacturer_id=8&amp;sort=p.quantity&amp;order=ASC&amp;limit=12">Наличие (меньше &gt; больше)</a></li>
                            <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer/info&amp;manufacturer_id=8&amp;sort=p.quantity&amp;order=DESC&amp;limit=12">Наличие (больше &gt; меньше)</a></li>
                        </ul>
                    </div>
                    <div class="btn-group" title="Показать:" id="limit-button">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                            <i class="fa fa-eye"></i>&nbsp;&nbsp;
                            <span class=" button-text">12&nbsp;&nbsp;</span><i class="fa fa-angle-down caretalt"></i>
                        </button>
                        <ul class="dropdown-menu pull-right">
                            <li class="text-right"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer/info&amp;manufacturer_id=8&amp;limit=12"><b>12</b></a></li>
                            <li class="text-right"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer/info&amp;manufacturer_id=8&amp;limit=25">25</a></li>
                            <li class="text-right"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer/info&amp;manufacturer_id=8&amp;limit=50">50</a></li>
                            <li class="text-right"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer/info&amp;manufacturer_id=8&amp;limit=75">75</a></li>
                            <li class="text-right"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer/info&amp;manufacturer_id=8&amp;limit=100">100</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php if (!empty($manufacturer->products)) :?>
            <div class="row">
            <?php foreach ($manufacturer->products as $product) :?>


                    <div class="product-layout product-grid col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="product-thumb thumbnail ">
                            <div class="image"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;manufacturer_id=8&amp;product_id=32&amp;limit=12"><img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/ipod_touch_1-220x220.jpg" alt="MP3 плеер Apple iPod touch 32Gb (5th generation)" title="MP3 плеер Apple iPod touch 32Gb (5th generation)" class="img-responsive center-block"></a></div>
                            <div>
                                <div class="caption">
                                    <div class="name">
                                        <?= Html::a($product->name, Url::to(['site/product', 'id'=>$product->id]));?>

                                    </div>
                                    <p class="description"><?= StringHelper::truncate($product->description, 255)?></p>



                                    <p class="price">$ <?=$product->price?></p>
                                    <p class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        &nbsp;&nbsp;0 отзывов
                                    </p>
                                    <div class="btn-group dropup">
                                        <button type="button" class="btn btn-addtocart" onclick="cart.add('32');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                        <button class="btn btn-addtocart" onclick="qview('32')" data-toggle="tooltip" title="" data-original-title="Быстрый просмотр">
                                            <i class="fa fa-eye fa-fw"></i>
                                        </button>
                                        <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-angle-down caretalt"></i>
                                        </button>
                                        <ul class="dropdown-menu addtocart-additional">
                                            <li><a onclick="fastorder('32')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                            <li><a onclick="wishlist.add('32');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                            <li><a rel="nofollow" onclick="compare.add('32');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>


            <?php endforeach; ?>
            </div>
        <?php endif;?>


        <div class="row pagination-wrapper">
            <div class="col-sm-6 text-left"></div>
            <div class="col-sm-6 text-right">Показано с 1 по 10 из 10 (всего 1 страниц)</div>
        </div>


    </div>
</div>

