<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id_user
 * @property string $username
 * @property string $password
 * @property string $Token
 * @property string $nama_lengkap
 * @property string $alamat
 * @property string $no_telp
 * @property string $user_type
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
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
            [['username', 'password', 'nama_lengkap', 'no_telp', 'user_type', 'status'], 'required'],
            [['user_type'], 'string'],
            [['username'], 'string', 'max' => 50],
            [['password'], 'string', 'max' => 10],
            // [['Token', 'alamat'], 'string', 'max' => 250],
            [['nama_lengkap'], 'string', 'max' => 100],
            [['no_telp'], 'number'],
            [['no_telp'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'username' => 'Username',
            'password' => 'Password',
            // 'Token' => 'Token',
            'nama_lengkap' => 'Nama Lengkap',
            // 'alamat' => 'Alamat',
            'no_telp' => 'No Telp',
            'user_type' => 'User Type',
            'flag' => 'Flag'
        ];
    }

    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
         return self::find()->where(['username' => $username])->andWhere(['!=','user_type','driver'])->one();
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id_user;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return null;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
