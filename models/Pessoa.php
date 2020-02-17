<?php
namespace app\models;

use yii\db\ActiveRecord;

class Pessoa extends ActiveRecord
{
    public static function  tableName(){

        return 'pessoas';
    }

}