<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "material".
 *
 * @property integer $id
 * @property string $name
 * @property integer $demention
 *
 * @property Demention $demention0
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
            [['name', 'demention'], 'required'],
            [['demention'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['demention'], 'exist', 'skipOnError' => true, 'targetClass' => Demention::className(), 'targetAttribute' => ['demention' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'demention' => 'Demention',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDemention0()
    {
        return $this->hasOne(Demention::className(), ['id' => 'demention']);
    }
}
