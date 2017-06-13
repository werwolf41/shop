<?php
/**
 * Created by PhpStorm.
 * User: krasn
 * Date: 12.06.2017
 * Time: 12:18
 */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\StringHelper;
use yii\widgets\LinkPager;
use app\components\CountPagesWidget;
?>


<ul class="breadcrumb">
    <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=common/home"><i class="fa fa-home"></i></a></li>
    <li class="active"><?=$category->name?></li>
</ul>
<h1><?=$category->name?></h1>
<div class="row">

    <div class="col-sm-4 col-md-3" id="category-column-left">
        <?php if (!empty($category->children)) :?>
        <div class="panel panel-default">
            <div class="panel-heading"><i class="fa fa-level-down"></i>&nbsp;&nbsp;Выберите подкатегорию</div>
            <div class="list-group">
                <?php foreach ($category->children as $child) : ?>
                    <?= Html::a($child->name, Url::to(['site/category', 'id'=>$child->id]), ['class'=>'list-group-item'])?>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
        <div id="column-left" class="col-sm-4 col-md-3">
            <div class="visible-xs col-show-button">
                <a class="btn btn-default btn-block" id="show-modules-col-left"><i class="fa fa-eye show-icon"></i><i class="fa fa-eye-slash hid-icon"></i> Левая колонка</a>
            </div>
            <div id="col-left-modules" class="hid-col-left">
                <div class="panel panel-default module-filter">
                    <div class="panel-heading"><i class="fa fa-filter"></i>&nbsp;&nbsp;Фильтр</div>
                    <div class="list-group">
                        <div class="list-group-item">
                            <div class="list-group-item-heading">
            <span class="filter-toggle pull-right" data-toggle="collapse" data-target="#filter-group1">
                <i class="fa fa-toggle-on on"></i>
                <i class="fa fa-toggle-off off"></i>
            </span>
                                <strong>Дата выхода на рынок</strong>
                            </div>
                            <div class="list-group-item-text collapse in" id="filter-group1">
                                <div class="filter-item">
                                    <input id="filt1" name="filter[]" type="checkbox" value="1">
                                    <label for="filt1">
                                        <i class="fa fa-check-square check-icon check"></i>
                                        <i class="fa fa-square-o check-icon uncheck"></i>
                                        <div class="filter-name">2010&nbsp;<span class="filter-total"></span></div>
                                    </label>
                                </div>
                                <div class="filter-item">
                                    <input id="filt2" name="filter[]" type="checkbox" value="2">
                                    <label for="filt2">
                                        <i class="fa fa-check-square check-icon check"></i>
                                        <i class="fa fa-square-o check-icon uncheck"></i>
                                        <div class="filter-name">2011&nbsp;<span class="filter-total"></span></div>
                                    </label>
                                </div>
                                <div class="filter-item">
                                    <input id="filt3" name="filter[]" type="checkbox" value="3">
                                    <label for="filt3">
                                        <i class="fa fa-check-square check-icon check"></i>
                                        <i class="fa fa-square-o check-icon uncheck"></i>
                                        <div class="filter-name">2012&nbsp;<span class="filter-total"></span></div>
                                    </label>
                                </div>
                                <div class="filter-item">
                                    <input id="filt4" name="filter[]" type="checkbox" value="4">
                                    <label for="filt4">
                                        <i class="fa fa-check-square check-icon check"></i>
                                        <i class="fa fa-square-o check-icon uncheck"></i>
                                        <div class="filter-name">2013&nbsp;<span class="filter-total"></span></div>
                                    </label>
                                </div>
                                <div class="filter-item">
                                    <input id="filt5" name="filter[]" type="checkbox" value="5">
                                    <label for="filt5">
                                        <i class="fa fa-check-square check-icon check"></i>
                                        <i class="fa fa-square-o check-icon uncheck"></i>
                                        <div class="filter-name">2014&nbsp;<span class="filter-total"></span></div>
                                    </label>
                                </div>
                                <div class="filter-item">
                                    <input id="filt6" name="filter[]" type="checkbox" value="6">
                                    <label for="filt6">
                                        <i class="fa fa-check-square check-icon check"></i>
                                        <i class="fa fa-square-o check-icon uncheck"></i>
                                        <div class="filter-name">2015&nbsp;<span class="filter-total"></span></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="list-group-item-heading">
            <span class="filter-toggle pull-right" data-toggle="collapse" data-target="#filter-group3">
                <i class="fa fa-toggle-on on"></i>
                <i class="fa fa-toggle-off off"></i>
            </span>
                                <strong>Конструкция</strong>
                            </div>
                            <div class="list-group-item-text collapse in" id="filter-group3">
                                <div class="filter-item">
                                    <input id="filt16" name="filter[]" type="checkbox" value="16">
                                    <label for="filt16">
                                        <i class="fa fa-check-square check-icon check"></i>
                                        <i class="fa fa-square-o check-icon uncheck"></i>
                                        <div class="filter-name">TV-тюнер&nbsp;<span class="filter-total"></span></div>
                                    </label>
                                </div>
                                <div class="filter-item">
                                    <input id="filt17" name="filter[]" type="checkbox" value="17">
                                    <label for="filt17">
                                        <i class="fa fa-check-square check-icon check"></i>
                                        <i class="fa fa-square-o check-icon uncheck"></i>
                                        <div class="filter-name">Авто регулировка яркости&nbsp;<span class="filter-total"></span></div>
                                    </label>
                                </div>
                                <div class="filter-item">
                                    <input id="filt18" name="filter[]" type="checkbox" value="18">
                                    <label for="filt18">
                                        <i class="fa fa-check-square check-icon check"></i>
                                        <i class="fa fa-square-o check-icon uncheck"></i>
                                        <div class="filter-name">Встроенные динамики&nbsp;<span class="filter-total"></span></div>
                                    </label>
                                </div>
                                <div class="filter-item">
                                    <input id="filt19" name="filter[]" type="checkbox" value="19">
                                    <label for="filt19">
                                        <i class="fa fa-check-square check-icon check"></i>
                                        <i class="fa fa-square-o check-icon uncheck"></i>
                                        <div class="filter-name">Камера&nbsp;<span class="filter-total"></span></div>
                                    </label>
                                </div>
                                <div class="filter-item">
                                    <input id="filt20" name="filter[]" type="checkbox" value="20">
                                    <label for="filt20">
                                        <i class="fa fa-check-square check-icon check"></i>
                                        <i class="fa fa-square-o check-icon uncheck"></i>
                                        <div class="filter-name">Микрофон&nbsp;<span class="filter-total"></span></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="list-group-item-heading">
            <span class="filter-toggle pull-right" data-toggle="collapse" data-target="#filter-group4">
                <i class="fa fa-toggle-on on"></i>
                <i class="fa fa-toggle-off off"></i>
            </span>
                                <strong>Назначение</strong>
                            </div>
                            <div class="list-group-item-text collapse in" id="filter-group4">
                                <div class="filter-item">
                                    <input id="filt25" name="filter[]" type="checkbox" value="25">
                                    <label for="filt25">
                                        <i class="fa fa-check-square check-icon check"></i>
                                        <i class="fa fa-square-o check-icon uncheck"></i>
                                        <div class="filter-name">Геймерский&nbsp;<span class="filter-total"></span></div>
                                    </label>
                                </div>
                                <div class="filter-item">
                                    <input id="filt24" name="filter[]" type="checkbox" value="24">
                                    <label for="filt24">
                                        <i class="fa fa-check-square check-icon check"></i>
                                        <i class="fa fa-square-o check-icon uncheck"></i>
                                        <div class="filter-name">Домашний&nbsp;<span class="filter-total"></span></div>
                                    </label>
                                </div>
                                <div class="filter-item">
                                    <input id="filt23" name="filter[]" type="checkbox" value="23">
                                    <label for="filt23">
                                        <i class="fa fa-check-square check-icon check"></i>
                                        <i class="fa fa-square-o check-icon uncheck"></i>
                                        <div class="filter-name">Офисный&nbsp;<span class="filter-total"></span></div>
                                    </label>
                                </div>
                                <div class="filter-item">
                                    <input id="filt22" name="filter[]" type="checkbox" value="22">
                                    <label for="filt22">
                                        <i class="fa fa-check-square check-icon check"></i>
                                        <i class="fa fa-square-o check-icon uncheck"></i>
                                        <div class="filter-name">Профессиональный&nbsp;<span class="filter-total"></span></div>
                                    </label>
                                </div>
                                <div class="filter-item">
                                    <input id="filt21" name="filter[]" type="checkbox" value="21">
                                    <label for="filt21">
                                        <i class="fa fa-check-square check-icon check"></i>
                                        <i class="fa fa-square-o check-icon uncheck"></i>
                                        <div class="filter-name">Рабочая станция&nbsp;<span class="filter-total"></span></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="list-group-item-heading">
            <span class="filter-toggle pull-right" data-toggle="collapse" data-target="#filter-group5">
                <i class="fa fa-toggle-on on"></i>
                <i class="fa fa-toggle-off off"></i>
            </span>
                                <strong>Тип компьютера</strong>
                            </div>
                            <div class="list-group-item-text collapse in" id="filter-group5">
                                <div class="filter-item">
                                    <input id="filt26" name="filter[]" type="checkbox" value="26">
                                    <label for="filt26">
                                        <i class="fa fa-check-square check-icon check"></i>
                                        <i class="fa fa-square-o check-icon uncheck"></i>
                                        <div class="filter-name">HTPC&nbsp;<span class="filter-total"></span></div>
                                    </label>
                                </div>
                                <div class="filter-item">
                                    <input id="filt27" name="filter[]" type="checkbox" value="27">
                                    <label for="filt27">
                                        <i class="fa fa-check-square check-icon check"></i>
                                        <i class="fa fa-square-o check-icon uncheck"></i>
                                        <div class="filter-name">Мини-ПК&nbsp;<span class="filter-total"></span></div>
                                    </label>
                                </div>
                                <div class="filter-item">
                                    <input id="filt28" name="filter[]" type="checkbox" value="28">
                                    <label for="filt28">
                                        <i class="fa fa-check-square check-icon check"></i>
                                        <i class="fa fa-square-o check-icon uncheck"></i>
                                        <div class="filter-name">Настольный&nbsp;<span class="filter-total"></span></div>
                                    </label>
                                </div>
                                <div class="filter-item">
                                    <input id="filt29" name="filter[]" type="checkbox" value="29">
                                    <label for="filt29">
                                        <i class="fa fa-check-square check-icon check"></i>
                                        <i class="fa fa-square-o check-icon uncheck"></i>
                                        <div class="filter-name">Неттоп&nbsp;<span class="filter-total"></span></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="list-group-item-heading">
            <span class="filter-toggle pull-right" data-toggle="collapse" data-target="#filter-group2">
                <i class="fa fa-toggle-on on"></i>
                <i class="fa fa-toggle-off off"></i>
            </span>
                                <strong>Интерфейсы</strong>
                            </div>
                            <div class="list-group-item-text collapse in" id="filter-group2">
                                <div class="filter-item">
                                    <input id="filt7" name="filter[]" type="checkbox" value="7">
                                    <label for="filt7">
                                        <i class="fa fa-check-square check-icon check"></i>
                                        <i class="fa fa-square-o check-icon uncheck"></i>
                                        <div class="filter-name">Аудиовход&nbsp;<span class="filter-total"></span></div>
                                    </label>
                                </div>
                                <div class="filter-item">
                                    <input id="filt8" name="filter[]" type="checkbox" value="8">
                                    <label for="filt8">
                                        <i class="fa fa-check-square check-icon check"></i>
                                        <i class="fa fa-square-o check-icon uncheck"></i>
                                        <div class="filter-name">Цифровой вход S/PDIF&nbsp;<span class="filter-total"></span></div>
                                    </label>
                                </div>
                                <div class="filter-item">
                                    <input id="filt9" name="filter[]" type="checkbox" value="9">
                                    <label for="filt9">
                                        <i class="fa fa-check-square check-icon check"></i>
                                        <i class="fa fa-square-o check-icon uncheck"></i>
                                        <div class="filter-name">HDMI хаб&nbsp;<span class="filter-total"></span></div>
                                    </label>
                                </div>
                                <div class="filter-item">
                                    <input id="filt10" name="filter[]" type="checkbox" value="10">
                                    <label for="filt10">
                                        <i class="fa fa-check-square check-icon check"></i>
                                        <i class="fa fa-square-o check-icon uncheck"></i>
                                        <div class="filter-name">Ethernet&nbsp;<span class="filter-total"></span></div>
                                    </label>
                                </div>
                                <div class="filter-item">
                                    <input id="filt11" name="filter[]" type="checkbox" value="11">
                                    <label for="filt11">
                                        <i class="fa fa-check-square check-icon check"></i>
                                        <i class="fa fa-square-o check-icon uncheck"></i>
                                        <div class="filter-name">FireWire хаб&nbsp;<span class="filter-total"></span></div>
                                    </label>
                                </div>
                                <div class="filter-item">
                                    <input id="filt12" name="filter[]" type="checkbox" value="12">
                                    <label for="filt12">
                                        <i class="fa fa-check-square check-icon check"></i>
                                        <i class="fa fa-square-o check-icon uncheck"></i>
                                        <div class="filter-name">Выход на наушники&nbsp;<span class="filter-total"></span></div>
                                    </label>
                                </div>
                                <div class="filter-item">
                                    <input id="filt13" name="filter[]" type="checkbox" value="13">
                                    <label for="filt13">
                                        <i class="fa fa-check-square check-icon check"></i>
                                        <i class="fa fa-square-o check-icon uncheck"></i>
                                        <div class="filter-name">S-video вход&nbsp;<span class="filter-total"></span></div>
                                    </label>
                                </div>
                                <div class="filter-item">
                                    <input id="filt14" name="filter[]" type="checkbox" value="14">
                                    <label for="filt14">
                                        <i class="fa fa-check-square check-icon check"></i>
                                        <i class="fa fa-square-o check-icon uncheck"></i>
                                        <div class="filter-name">SCART&nbsp;<span class="filter-total"></span></div>
                                    </label>
                                </div>
                                <div class="filter-item">
                                    <input id="filt15" name="filter[]" type="checkbox" value="15">
                                    <label for="filt15">
                                        <i class="fa fa-check-square check-icon check"></i>
                                        <i class="fa fa-square-o check-icon uncheck"></i>
                                        <div class="filter-name">USB хаб&nbsp;<span class="filter-total"></span></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer text-right">
                        <button type="button" style="display: none;" id="button-clear" class="btn btn-default">Сбросить</button>
                        <button type="button" id="button-filter" class="btn btn-primary">Поиск</button>
                    </div>
                </div>
                <script type="text/javascript">
                    $('#button-filter').on('click', function() {
                        filter = [];

                        $('input[name^=\'filter\']:checked').each(function(element) {
                            filter.push(this.value);
                        });

                        location = 'http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&path=20&filter=' + filter.join(',');
                    });
                    if ($('input[name^=\'filter\']').is('input[name^=\'filter\']:checked')) {
                        $('#button-clear').css({'display':'inline'});
                    }
                    $('#button-clear').on('click', function() {
                        location = 'http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&path=20';
                    });
                </script>
            </div>
        </div>
        <script>
            $('#show-modules-col-left').click(function () {
                $('#col-left-modules').toggleClass('show');
                $(this).toggleClass('open');
            });
        </script>
    </div>
    <div id="content" class="col-sm-8 col-md-9">
        <div class="row">
            <div class="col-lg-12 products-filter">
                <div class="btn-group">
                    <div class="btn-group">
                        <button type="button" id="grid-view" class="btn btn-default">
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
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                            <i class="fa fa-sort"></i>&nbsp;&nbsp;
                            <span class="hidden-xs  button-text">&nbsp;&nbsp;</span><i class="fa fa-angle-down caretalt"></i>
                        </button>
                        <ul class="dropdown-menu pull-right">
                            <?php $orders = [
                                    ['name'=>'По умолчанию', 'order'=> 'ASC', 'sort'=>'sort'],
                                    ['name'=>'Название (А - Я)', 'order'=>'ASC', 'sort'=>'name'],
                                    ['name'=>'Название (Я - А)', 'order'=>'DESC', 'sort'=>'name'],
                                    ['name'=>'Цена (низкая &gt; высокая)', 'order'=>'ASC', 'sort'=>'price'],
                                    ['name'=>'Цена (высокая &gt; низкая)', 'order'=>'DESC', 'sort'=>'price'],
                                    ['name'=>'Рейтинг (начиная с высокого)', 'order'=>'ASC', 'sort'=>'rating'],
                                    ['name'=>'Рейтинг (начиная с низкого)', 'order'=>'DESC', 'sort'=>'rating'],
                                    ['name'=>'Модель (А - Я)', 'order'=>'ASC', 'sort'=>'model'],
                                    ['name'=>'Модель (Я - А)', 'order'=>'DESC', 'sort'=>'model'],
                                    ['name'=>'Наличие (меньше &gt; больше)', 'order'=>'ASC', 'sort'=>'quantity'],
                                    ['name'=>'Наличие (больше &gt; меньше)', 'order'=>'DESC', 'sort'=>'quantity'],
                            ];
                            if(!$conditions['sort']) $conditions['sort'] = 'name';
                            if(!$conditions['order']) $conditions['order'] = 'ASC';
                            if(!$conditions['limit']) $conditions['limit'] = 12;
                            foreach ($orders as $orderDef) :
                            ?>

                                <?php if ($conditions['sort'] == $orderDef['sort'] && $conditions['order'] == $orderDef['order']) : ?>
                                    <li><?= Html::a('<b>'.$orderDef['name'].'</b>', Url::to(['site/category', 'id'=>$category->id, 'sort'=>$orderDef['sort'], 'order'=>$orderDef['order'], 'limit'=>$conditions['limit']]))?></li>
                                <?php else : ?>
                                <li><?= Html::a($orderDef['name'], Url::to(['site/category', 'sort'=>$orderDef['sort'], 'order'=>$orderDef['order'], 'limit'=>$conditions['limit'], 'id'=>$category->id]) )?></li>
                                <?php endif; ?>
                            <?php endforeach; ?>

                        </ul>
                    </div>
                    <div class="btn-group" title="Показать:" id="limit-button">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                            <i class="fa fa-eye"></i>&nbsp;&nbsp;
                            <span class=" button-text">&nbsp;&nbsp;</span><i class="fa fa-angle-down caretalt"></i>
                        </button>
                        <ul class="dropdown-menu pull-right">
                            <?php $limits = [12,25,50,75,100];

                            foreach ($limits as $limitDef) :
                            ?>
                                <?php if ($conditions['limit'] == $limitDef) : ?>
                                    <li class="text-right"><?= Html::a('<b>'.$limitDef.'</b>', Url::to(['site/category', 'id'=>$category->id, 'limit'=>$limitDef, 'sort'=>$conditions['sort'], 'order'=>$conditions['order']]))?>
                                <?php else : ?>
                                    <li class="text-right"><?= Html::a($limitDef, Url::to(['site/category', 'id'=>$category->id, 'limit'=>$limitDef, 'sort'=>$conditions['sort'], 'order'=>$conditions['order']]))?>
                                <?php endif; ?>
                            <?php endforeach; ?>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if (!empty ($products)) : ?>



                    <?php foreach ($products as $product) :?>


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

            <?php endif;?>
        </div>

        <div class="row pagination-wrapper">
            <div class="col-sm-6 text-left">
                <?= LinkPager::widget([
                'pagination' => $pages,
                ]);?>
            </div>


            <div class="col-sm-6 text-right"> <?= CountPagesWidget::widget([
                    'pagination' => $pages,
                ]);?></div>
        </div>

        <div class="red-links">
            <div class="pull-left"><img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/compaq_presario-80x80.jpg" alt="Компьютеры" title="Компьютеры" class="img-thumbnail" style="margin: 0 10px 5px 0"></div>
            <p>
                Example of category description text</p>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<script type="application/javascript">

    function adddotdotdot($element) {
        $(".subcategory .name-wrapper").dotdotdot();
    }
    $(document).ready(adddotdotdot);
    $(window).resize(adddotdotdot);

    $(function(){
        $('#limit-button').find('.button-text').prepend($('#limit-button').find("b").text());
        $('#sort-button').find('.button-text').prepend($('#sort-button').find("b").text());
    });
</script>