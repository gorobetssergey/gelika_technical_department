<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "demention".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Material[] $materials
 */
class Demention extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'demention';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
<<<<<<< HEAD
            'name' => 'Назва',
=======
            'name' => 'Name',
>>>>>>> 19799189d71326cf704ffef5f1e77386baf3c7a5
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaterials()
    {
        return $this->hasMany(Material::className(), ['demention' => 'id']);
    }
}
