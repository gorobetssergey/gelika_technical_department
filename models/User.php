<?php

namespace app\models;

use Yii;
use yii\base\Exception;
use yii\web\IdentityInterface;
use app\models\Role;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $email
 * @property integer $active
 * @property string $password
 * @property string $repassword
 * @property string $token
 * @property integer $role
 * @property string $created
 * @property integer $auth
 *
 * @property Role $role0
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{

    const STATUS_ACTIVE = 1;

    const ROLE_USER = 1;
    const ROLE_ADMIN = 2;

    public $repet_password;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'password', 'repassword', 'token', 'created'], 'required'],
            [['active', 'role', 'auth'], 'integer'],
            [['created'], 'safe'],
            [['email'], 'string', 'max' => 30],
            [['password', 'repassword', 'token'], 'string', 'max' => 255],
            [['role'], 'exist', 'skipOnError' => true, 'targetClass' => Role::className(), 'targetAttribute' => ['role' => 'id']],
            /**
             * scenarios registration
             */
            [['email', 'password', 'repet_password'], 'required', 'on'=>'registration'],
            [['email'], 'string','max' => 30, 'on'=>'registration'],
            [['password', 'repet_password'], 'string', 'min' => 6,'max' => 30, 'on'=>'registration'],
            ['email', 'unique'],
            ['email', 'email'],
            ['repet_password', 'compare', 'compareAttribute'=>'password', 'on' => 'registration' ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'email' => 'Пошта',
            'active' => Yii::t('app', 'Active'),
            'password' => 'Пароль',
            'repassword' => Yii::t('app', 'Repassword'),
            'token' => Yii::t('app', 'Token'),
            'role' => Yii::t('app', 'Role'),
            'created' => Yii::t('app', 'Created'),
            'auth' => Yii::t('app', 'Auth'),
            'repet_password' => 'Повторити пароль'
        ];
    }

    public function scenarios()
    {
        return [
            'registration' => ['email','password','repet_password'],
            'default' => parent::scenarios()
        ];
    }

    public static function findByUserEmail($useremail)
    {
        return self::findOne([
            'email' => $useremail
        ]);
    }

    public function setPassword($password)
    {
        $this->password = Yii::$app->security->generatePasswordHash($password);
    }

    public function generateAuthKey()
    {
        $this->token = Yii::$app->security->generateRandomString();
    }

    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password,$this->password);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRole0()
    {
        return $this->hasOne(Role::className(), ['id' => 'role']);
    }

    public static function findIdentity($id)
    {
        return static::findOne([
            'id' => $id,
            'active' => self::STATUS_ACTIVE
        ]);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->token;
    }

    public function validateAuthKey($authKey)
    {
        return $this->token === $authKey;
    }

    public static function id()
    {
        return (!Yii::$app->user->isGuest) ? Yii::$app->user->identity->getId() : null;
    }

    private function getRole()
    {
        $this->role = self::ROLE_USER;
    }

    public function reg()
    {
        $transaction = Yii::$app->db->beginTransaction();
        try {
            $res1 = false;
            $res2 = false;

            $user = new User();
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            $user->getRole();
            $user->repassword = $user->password;
            $user->created = date('Y-m-d H:i:s', strtotime('now'));
            $user->active = self::STATUS_ACTIVE;
            $user->auth = 0;

            if($user->save()){
                $transaction->commit();
                return $user;
            }else{
                $transaction->rollBack();
                return null;
            }
        }
        catch (Exception $e){
            $transaction->rollBack();
        }
        return null;
    }
}
