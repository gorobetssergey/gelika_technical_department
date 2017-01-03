<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "farba".
 *
 * @property integer $id
 * @property string $name_mat
 * @property double $sq_dem
 */
class Farbacolor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'farbacolor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_mat', 'sq_dem'], 'required'],
            [['sq_dem'], 'number'],
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
            'name_mat' => 'Назва матеріалу',
            'sq_dem' => 'Площа поперечного перерізу, м.кв.',
        ];
    }
}
