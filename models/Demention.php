<?php

namespace app\models;
use Yii;

class Demention extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'demention';
    }
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 10],
        ];
    }
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Назва',
        ];
    }
    public function getMaterials()
    {
        return $this->hasMany(Material::className(), ['demention' => 'id']);
    }
}
