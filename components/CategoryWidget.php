<?php
/**
 * Created by PhpStorm.
 * User: krasn
 * Date: 08.06.2017
 * Time: 14:11
 */

namespace app\components;


use yii\base\Widget;
use app\models\Categories;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;

class CategoryWidget extends Widget
{

    public $data = [];
    public $tree='';
    public $lev0Item = '<li><a href="{url}">{label}</a></li>';

    public $lev1Item = '<li class=""><span class="toggle-child"><i class="fa fa-plus plus"></i><i class="fa fa-minus minus"></i></span><a class="with-child"><i class="fa fa-angle-right arrow"></i>{label} <span class="mobilink hidden-lg hidden-md" onclick="location.href=\'{url}\'"></span></a>{items}</li>';

    public $lev2Item = '<div class="col-md-4"><div class="child-box-cell"><div class="h5"><span class="toggle-child2"><i class="fa fa-plus plus"></i><i class="fa fa-minus minus"></i></span><a href="{url}" class="with-child2"><span class="livel-down hidden-md hidden-lg">↳</span>{label}</a></div>{items}</div></div>';

    public function run()
    {
        //get Cache
        $menu  = \Yii::$app->cache->get('menuCategorySidebar');
        if($menu) return $menu;
        $this->data = Categories::find()->select(['id', 'name AS label', 'parent_id'])->indexBy('id')->asArray()->all();
        $this->tree = $this->getTree();
        $menu =  $this->renderItems();
        \Yii::$app->cache->set('menuCategorySidebar', $menu, 60*60*24*10);
        return $menu;
    }

    public function getTree()
    {
        $tree = [];
        foreach ($this->data as $id => &$node) {
            if (!$node['parent_id']) {

                $tree[$id] =&$node;

            } else {
                $this->data[$node['parent_id']]['items'][$node['id']]=&$node;
            }
        }
        return $tree;
    }



    protected function renderItems(){
        $items1='';
        foreach ($this->tree as  $level1) {

            if (!empty($level1['items'])) {
                $i=0;
                $items2='';
                foreach ($level1['items'] as $level2) {
                    $i++;
                    $items3='';
                    if (!empty($level2['items'])) {

                        foreach ($level2['items'] as $level3) {
                           $items3 .= Html::tag('li', 
                            Html::a(Html::tag('span', '&#10149;', ['class'=>'livel-down']).$level3['label'],
                                Url::to(['site/category', 'id'=>$level3['id']])));
                        }
                        $items3 = Html::tag('ul', $items3, ['class'=>'child2-box']);
                    }

                    $items2 .=strtr($this->lev2Item, [
                        '{label}'=>$level2['label'],
                        '{items}'=>$items3,
                        '{url}'=> Url::to(['site/category', 'id'=>$level2['id']])
                        ]);
                    if (($i % 3) == 0 ) {
                        $items2 .= Html::tag('div', '', ['class'=>'clearfix visible-md visible-lg']);
                    }
                }

                $items2 = Html::tag('div',
                    Html::tag('div', $items2, ['class'=>'row']).
                        Html::tag('div',Html::a('Смотреть Все&nbsp;'.$level1['label'],  Url::to(['site/category', 'id'=>$level1['id']])),['class'=>'see-all-categories hidden-xs hidden-sm']),
                        ['class'=>'child-box box-col-3']);

                $items1 .= strtr($this->lev1Item, [
                    '{label}'=>$level1['label'],
                    '{url}'=> Url::to(['site/category', 'id'=>$level1['id']]),
                    '{items}'=>$items2,
                    ]);
            }else{
                $items1 .= strtr($this->lev0Item, [
                    '{label}'=>$level1['label'],
                    '{url}'=> Url::to(['site/category', 'id'=>$level1['id']]),
                    ]);
            }
        }
        return Html::tag('ul', $items1, ['id'=>'menu-list', 'class'=>'dropdown-menu']);
    }


}