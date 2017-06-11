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
/*
    public $items = [];
    public $labelTemplate = '{label}';
    public $submenuTemplate = "\n<ul  id=\"menu-list\" class=\"dropdown-menu\">\n{items}\n</ul>\n";
    public $linkTemplate = '<a href="{url}">{label}</a>';
    public $linkSubTemplate = '<a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="true"><span class="badge pull-right"><i class="fa fa-plus"></i></span>{label}</a>';
    public $linkSubmenuTemplate = '<a href="{url}"><span class="badge pull-right"><i class="fa fa-plus"></i></span>{label}</a>';*/

    public $lev0Item = '<li class=""><span class="toggle-child"><i class="fa fa-plus plus"></i><i class="fa fa-minus minus"></i></span><a class="with-child">{label} <span class="mobilink hidden-lg hidden-md" onclick="location.href=\'{url}\'"></span></a></li>';

    public $lev1Item = '<li class=""><span class="toggle-child"><i class="fa fa-plus plus"></i><i class="fa fa-minus minus"></i></span><a class="with-child"><i class="fa fa-angle-right arrow"></i>{label} <span class="mobilink hidden-lg hidden-md" onclick="location.href=\'{url}\'"></span></a>{items}</li>';

    public $lev2Item = '<div class="col-md-4"><div class="child-box-cell"><div class="h5"><span class="toggle-child2"><i class="fa fa-plus plus"></i><i class="fa fa-minus minus"></i></span>{label}</div>{items}</div></div>';

    public function run()
    {
        //get Cache
      //  $menu  = \Yii::$app->cache->get('menuCategorySidebar');
       // if($menu) return $menu;
        $this->data = Categories::find()->select(['id', 'name AS label', 'parent_id'])->indexBy('id')->asArray()->all();
        $this->tree = $this->getTree();
        return $this->renderItems();
       return var_dump($this->getTree());$tree = $this->getTree();

        if (!empty($tree)) {

            $menu =  Html::tag('ul', $this->renderItems($tree), ['class'=>'nav']);
        }
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

  /*  protected function renderItems($items)
    {
        $lines = [];
        foreach ($items as $item) {
            $menu = $this->renderItem($item);
            if (!empty($item['items'])) {
                $submenuTemplate = ArrayHelper::getValue($item, 'submenuTemplate', $this->submenuTemplate);
                $menuI = strtr($submenuTemplate, [
                    '{items}' => $this->renderItems($item['items']),
                ]);
                $lines[] = Html::tag('li', $menu.$menuI, ['class'=>"dropdown"]);
            }else{
                $lines[] = Html::tag('li', $menu);
            }


        }

        return implode("\n", $lines);

    }

    protected function renderItem($item)
    {
        if (isset($item['id'])) {
            if (isset($item['items'])) {
                $template = ArrayHelper::getValue($item, 'template', $this->linkSubTemplate);
            } else {
                $template = ArrayHelper::getValue($item, 'template', $this->linkTemplate);
            }


            return strtr($template, [
                '{url}' => Html::encode(Url::to(['site/category', 'id'=>$item['id']])),
                '{label}' => $item['label'],
            ]);
        } else {
            if (isset($item['items'])) {
                $template = ArrayHelper::getValue($item, 'template', $this->linkSubTemplate);
            } else {
                $template = ArrayHelper::getValue($item, 'template', $this->linkTemplate);
            }

            return strtr($template, [
                '{label}' => $item['label'],
            ]);
        }
    }*/

    protected function renderItems(){
        $items1='';
        foreach ($this->tree as  $level1) {
            if (!empty($level1['items'])) {
                $i=0;
                foreach ($level1['items'] as $level2) {
                    if (!empty($level2['items'])) {
                        $items3='';
                        foreach ($level2['items'] as $level3) {
                           $items3 .= Html::tag('li', 
                            Html::a($level3['label'], 
                                Url::to(['site/category', 'id'=>$level3['id']])));
                        }
                        $items3 = Html('ul', $items3, ['class'=>'child2-box']);
                    }

                    $items2 .=strtr($this->lev2Item, [
                        '{label}'=>$level2['label'],
                        '{items}'=>$level3,
                        ]);
                    if (($i % 3) == 0 ) {
                        $items2 .= Html::tag('div', '', ['class'=>'clearfix visible-md visible-lg']);
                    }
                }

                $items2 = Html::tag('div',
                    Html::tag('div', $items2, ['class'=>'row']) ,['class'=>'child-box box-col-3']);

                $items1 .= strtr($this->lev1Item, [
                    '{label}'=>$level1['label'],
                    '{url}'=>Url::to('site/category', ['id'=>$level1['id']]),
                    '{items}'=>$items2,
                    ]);
            }else{
                $items1 .= strtr($this->lev0Item, [
                    '{label}'=>$level1['label'],
                    '{url}'=>Url::to('site/category', ['id'=>$level1['id']]),
                    ]);
            }
        }
        return Html::tag('ul', $items1, ['id'=>'menu-list', 'class'=>'dropdown-menu']);
    }


}