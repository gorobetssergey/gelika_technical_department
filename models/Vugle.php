<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vugle".
 *
 * @property integer $id
 * @property integer $dr_kof
 * @property integer $vug_kof
 */
class Vugle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vugle';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dr_kof', 'vug_kof'], 'required'],
            [['dr_kof', 'vug_kof'], 'double'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dr_kof' => 'Коефіцієнт для дроту зварювального (норма)',
            'vug_kof' => 'Коефіцієнт для вуглекислоти (норма)',
        ];
    }
}
