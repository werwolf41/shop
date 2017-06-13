<?php


namespace app\models;


use yii\db\ActiveRecord;

class Products extends ActiveRecord
{

    public static function tableName()
    {
        return 'products';
    }

    public function getCategories()
    {
        return $this->hasMany(CategoriesProducts::className(), ['products_id'=>'id']);
    }

    public function getManufacturer()
    {
        return $this->hasOne(Manufacturers::className(), ['id'=>'manufacturer_id']);
    }
}