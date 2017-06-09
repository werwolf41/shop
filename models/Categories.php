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
        return $this->hasMany(CategoriesProducts::className(), ['categories_id'=>'id']);
    }
}