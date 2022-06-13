<?php

namespace app\models;

class User extends \yii\base\BaseObject implements \yii\web\IdentityInterface
{
    public $id;
    public $name;
    public $surname;
    public $patronymic;
    public $login;
    public $email;
    public $password;
    public $role_id;
    public $authKey;
    public $accesstoken;

    private static $users = [
        '1' => [
            'id' => '1',
            'name' => 'Коля',
            'surname' => 'Иванов',
            'patronymic' => 'Иванович',
            'login' => 'kolya',
            'email' => 'ooo@ooo.ru',
            'password' => 'kolya',
            'role_id' => '2',
            'authKey' =>'1',
            'accesstoken' => '1',
        ],
        '2' => [
            'id' => '2',
            'name' => 'Админ',
            'surname' => 'Админ',
            'patronymic' => '',
            'login' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'admin11',
            'role_id' => '1',
            'authKey' =>'2',
            'accesstoken' => '2',
        ],
        '3' => [
            'id' => '3',
            'name' => 'Саша',
            'surname' => 'Александров',
            'patronymic' => '',
            'login' => 'sasha',
            'email' => 'sss@sss.ru',
            'password' => 'sasha',
            'role_id' => '2',
            'authKey' =>'3',
            'accesstoken' => '3',
        ],
    ];


    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
    }

    /**
     * {@inheritdoc}
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
    public static function findByUsername($login)
    {
        foreach (self::$users as $user) {
            if (strcasecmp($user['login'], $login) === 0) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * {@inheritdoc}
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
