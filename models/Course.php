<?php
namespace app\models;

use yii\db\ActiveRecord;

class Course extends ActiveRecord
{
    public static function tableName()
    {
        return 'courses';
    }
}