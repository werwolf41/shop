<?php
/**
 * Created by PhpStorm.
 * User: krasn
 * Date: 13.06.2017
 * Time: 12:18
 */

namespace app\components;


use yii\base\Widget;
use yii\base\InvalidConfigException;

class CountPagesWidget extends Widget
{

    public $template = 'Показано с {itemStart} по {itemStop} из {totalItem} (всего {pages} страниц)';
    public $pagination;
    public function init()
    {
        if ($this->pagination === null) {
            throw new InvalidConfigException('The "pagination" property must be set.');
        }
    }

    public function run(){
        $page = $this->pagination->page;
        $pageSize = $this->pagination->pageSize;
        $totalItem = $this->pagination->totalCount;

        if ($page == 0) $itemStart = $page+1;
        else $itemStart = $page * $pageSize + 1;

        $itemStop = ($totalItem >= $itemStart + $pageSize -1) ? $itemStart + $pageSize -1: $totalItem;

        $pages = (($totalItem % $pageSize) == 0) ? $totalItem / $pageSize : ceil ($totalItem / $pageSize);

        echo strtr($this->template, [
            '{itemStart}'=> $itemStart,
            '{itemStop}' => $itemStop,
            '{totalItem}'=> $totalItem,
            '{pages}' =>$pages,
        ]);
    }
}