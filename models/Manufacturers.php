<?php


namespace app\models;


use yii\db\ActiveRecord;

class Manufacturers extends ActiveRecord
{

    public static function tableName()
    {
        return '{{%manufacturer}}';
    }

    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['manufacturer_id'=>'id']);
    }
}