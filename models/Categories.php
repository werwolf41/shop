<?php


namespace app\models;


use yii\db\ActiveRecord;

class Categories extends ActiveRecord
{

    public static function tableName()
    {
        return 'categories';
    }

    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['id'=>'products_id'])
            ->viaTable('{{%categories_products}}', ['categories_id'=>'id']);
    }

    public function getChildren()
    {
        return $this->hasMany(Categories::className(), ['parent_id'=>'id']);
    }
}