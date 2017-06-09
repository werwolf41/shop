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

    public $items = [];
    public $labelTemplate = '{label}';
    public $submenuTemplate = "\n<ul class=\"dropdown-menu\">\n{items}\n</ul>\n";
    public $linkTemplate = '<a href="{url}">{label}</a>';
    public $linkSubTemplate = '<a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="true"><span class="badge pull-right"><i class="fa fa-plus"></i></span>{label}</a>';
    public $linkSubmenuTemplate = '<a href="{url}"><span class="badge pull-right"><i class="fa fa-plus"></i></span>{label}</a>';


    public function run()
    {
        //get Cache
        $menu  = \Yii::$app->cache->get('menuCategorySidebar');
        if($menu) return $menu;
        $this->data = Categories::find()->select(['id', 'name AS label', 'parent_id'])->indexBy('id')->asArray()->all();

        $tree = $this->getTree();

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

    protected function renderItems($items)
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
    }



}