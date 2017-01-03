<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "porolon".
 *
 * @property integer $id
 * @property string $name_mat
 * @property integer $height
 * @property integer $destiny
 */
class Porolon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'porolon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_mat', 'height', 'destiny'], 'required'],
            [['height', 'destiny'], 'integer'],
            [['name_mat'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_mat' => 'Назва:',
            'height' => 'товщина поролону, мм:',
            'destiny' => 'Щільність, м.куб:',
        ];
    }
}
