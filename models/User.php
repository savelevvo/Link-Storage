<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use yii\web\BadRequestHttpException;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $login
 * @property string $password
 * @property string $email
 */
//class User extends \yii\db\ActiveRecord
class User extends ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['login', 'password', 'email'], 'required'],
            [['login', 'email'], 'string', 'max' => 45],
            [['password'], 'string', 'max' => 100],
            [['login'], 'unique'],
            [['email'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'password' => 'Password',
            'email' => 'Email',
        ];
    }

    public function register()
    {
        if (Yii::$app->user->login(User::findOne(['login' => $this->login]))) {
            return true;
        } elseif (!Yii::$app->user->isGuest) {
            throw new BadRequestHttpException("You are already logged in!");
        }

    }

    public function login()
    {
        if ($identity = User::findOne(['login' => $this->login])) {
            if (Yii::$app->getSecurity()->validatePassword($this->password, $identity->password)) {
                Yii::$app->user->login($identity);
                return true;
            } else
                throw new BadRequestHttpException('Invalid password!');
        } else
            throw new BadRequestHttpException('User does not exist!');
    }

    /**
     * @param bool $insert
     * @return bool
     *
     * generates the hash
     */
    public function beforeSave($insert = true)
    {
        if (parent::beforeSave($insert)) {
            $this->password = Yii::$app->getSecurity()->generatePasswordHash($this->password);
            return true;
        } else {
            return false;
        }
    }

    public static function findIdentity($id)
    {
        return static::findOne($id);
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
        return $this->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }
}
