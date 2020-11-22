<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string|null $username
 * @property string|null $password_hash
 * @property string|null $auth_key
 * @property string|null $access_token
 *
 * @property Contract[] $contracts
 * @property Contract[] $contracts0
 * @property Event[] $events
 * @property-write mixed $password
 * @property-read null|string $authKey
 * @property Event[] $events0
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password_hash', 'auth_key', 'access_token'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password_hash' => 'Password Hash',
            'auth_key' => 'Auth Key',
            'access_token' => 'Access Token',
        ];
    }

    /**
     * Gets query for [[Contracts]].
     *
     * @return \yii\db\ActiveQuery|ContractQuery
     */
    public function getContracts()
    {
        return $this->hasMany(Contract::className(), ['creator' => 'id']);
    }

    /**
     * Gets query for [[Contracts0]].
     *
     * @return \yii\db\ActiveQuery|ContractQuery
     */
    public function getContracts0()
    {
        return $this->hasMany(Contract::className(), ['lawyer' => 'id']);
    }

    /**
     * Gets query for [[Events]].
     *
     * @return \yii\db\ActiveQuery|EventQuery
     */
    public function getEvents()
    {
        return $this->hasMany(Event::className(), ['user' => 'id']);
    }

    /**
     * Gets query for [[Events0]].
     *
     * @return \yii\db\ActiveQuery|EventQuery
     */
    public function getEvents0()
    {
        return $this->hasMany(Event::className(), ['creator' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return UserQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UserQuery(get_called_class());
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }

    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->getSecurity()->validatePassword($password, $this->password_hash);
    }

    public function beforeSave($insert){
        if (!parent::beforeSave($insert)) {
            return false;
        }

        if ($this->isNewRecord) {
            $this->password_hash = Yii::$app->getSecurity()->generatePasswordHash($this->password_hash);
            $this->auth_key = \Yii::$app->security->generateRandomString();
            return true;
        }
    }
}
