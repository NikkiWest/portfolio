<?php


namespace app\models;


use yii\db\ActiveRecord;

class Type extends ActiveRecord
{
    public static function tableName()
    {
        return '{{type}}';
    }
}