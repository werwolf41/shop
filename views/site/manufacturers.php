<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

use yii\helpers\Url;
?>

<ul class="breadcrumb">
    <li> <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=common/home"> <i class="fa fa-home"></i> </a> </li>
    <li> <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer"> Производитель </a> </li>
</ul>
<div class="row">                <div id="content" class="col-sm-12">      <h1>Производители</h1>



        <?php if (!empty($abc)) : ?>
            <p><strong>Алфавитный указатель:</strong>

                <?php foreach ($abc as $value) : ?>
                    &nbsp;&nbsp;&nbsp;<a href="#<?=mb_convert_case ($value, MB_CASE_TITLE)?>"><?= mb_convert_case ($value, MB_CASE_TITLE)?></a>
                <?php endforeach; ?>

            </p>
        <?php endif; ?>

        <?php if (!empty($manufacturers)) : ?>
                <?php foreach ($manufacturers as $key => $manufactureLev) : ?>

                <h2 id="<?=mb_convert_case ($key, MB_CASE_TITLE)?>"><?=mb_convert_case ($key, MB_CASE_TITLE)?></h2>
                <div class="row">
                <?php foreach ($manufactureLev as $manufacture) : ?>
                    <div class="col-sm-3"><a href="<?= URL::to(['site/manufacturer', 'id'=>$manufacture['id']])?>"><?=mb_convert_case ($manufacture['name'], MB_CASE_TITLE);?></a></div>
                <?php endforeach; ?>
                </div>


                <?php endforeach; ?>
        <?php endif; ?>


    </div>
</div>
