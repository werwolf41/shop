<?php


namespace app\models;


use yii\db\ActiveRecord;

class CategoriesProducts extends ActiveRecord
{

    public static function tableName()
    {
        return 'categories_products';
    }

    public function getCategory()
    {
        return $this->hasOne(Categories::className(), ['id'=>'categories_id']);
    }

    public function getProduct()
    {
        return $this->hasOne(Products::className(), ['id'=>'products_id']);
    }
}