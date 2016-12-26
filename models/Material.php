<?php
namespace app\models;
use Yii;
class Material extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'material';
    }
    public function rules()
    {
        return [
            [['name', 'demention'], 'required'],
            [['demention'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['demention'], 'exist', 'skipOnError' => true, 'targetClass' => Demention::className(), 'targetAttribute' => ['demention' => 'id']],
        ];
    }
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'demention' => 'Demention',
        ];
    }
    public function getDemention0()
    {
        return $this->hasOne(Demention::className(), ['id' => 'demention']);
    }
}
