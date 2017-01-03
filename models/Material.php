<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "material".
 *
 * @property integer $id
 * @property string $name_mat
 * @property string $name_dem
 * @property integer $weight
 */
class Material extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'material';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_mat', 'name_dem', 'weight'], 'required'],
            [['weight'], 'double'],
            [['name_mat', 'name_dem'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_mat' => 'Назва матеріалу:',
            'name_dem' => 'Одиниця виміру:',
            'weight' => 'Вага за од.виміру, кг:',
        ];
    }
}
