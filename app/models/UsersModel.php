<?php

namespace Pbackbone\Model;

use Phalcon\Mvc\Model\Relation;

/**
 * PartModel
 * @package Pbackbone\Models
 * @autogenerated by Phalcon Developer Tools
 * @date 2020-03-12, 06:15:31
 */
class UsersModel extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="id", type="integer", nullable=false)
     */
    protected $id;

    /**
     *
     * @var string
     * @Column(column="first_name", type="string", nullable=true)
     */
    protected $firstName;

    /**
     *
     * @var string
     * @Column(column="last_name", type="string", nullable=true)
     */
    protected $lastName;

    /**
     *
     * @var string
     * @Column(column="username", type="string", length=100, nullable=true)
     */
    protected $username;

    /**
     *
     * @var string
     * @Column(column="email", type="string", nullable=true)
     */
    protected $email;

     /**
     *
     * @var string
     * @Column(column="phone", type="string", nullable=true)
     */
    protected $phone;

     /**
     *
     * @var string
     * @Column(column="password", type="string", nullable=true)
     */
    protected $password;

     /**
     *
     * @var string
     * @Column(column="pin", type="string", nullable=true)
     */
    protected $pin;

    /**
     *
     * @var string
     * @Column(column="is_active", type="string", length='yes','no', nullable=true)
     */
    protected $isActive;

    /**
     *
     * @var string
     * @Column(column="is_login", type="string", length='yes','no', nullable=true)
     */
    protected $isLogin;

    /**
     *
     * @var string
     * @Column(column="is_reset_password", type="string", length='yes','no', nullable=true)
     */
    protected $isResetPassword;

    /**
     *
     * @var string
     * @Column(column="last_login", type="string", length='yes','no', nullable=true)
     */
    protected $lastLogin;

    /**
     *
     * @var string
     * @Column(column="profile_pic", type="string", nullable=true)
     */
    protected $profilePic;

    /**
     *
     * @var string
     * @Column(column="created_at", type="string", nullable=true)
     */
    protected $createdAt;

    /**
     *
     * @var string
     * @Column(column="updated_at", type="string", nullable=true)
     */
    protected $updatedAt;


    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return UsersModel
     */
    public function setId(int $id): UsersModel
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Method to set the value of field first_name
     *
     * @param string $firstName
     * @return UsersModel
     */
    public function setFirstName(string $firstName): UsersModel
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Method to set the value of field last_name
     *
     * @param string $lastName
     * @return UsersModel
     */
    public function setLastName(string $lastName): UsersModel
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Method to set the value of field username
     *
     * @param string $username
     * @return UsersModel
     */
    public function setUsername(string $username): UsersModel
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Method to set the value of field email
     *
     * @param string $email
     * @return UsersModel
     */
    public function setEmail(string $email): UsersModel
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Method to set the value of field phone
     *
     * @param string $phone
     * @return UsersModel
     */
    public function setPhone(string $phone): UsersModel
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Method to set the value of field password
     *
     * @param string $password
     * @return UsersModel
     */
    public function setPassword(string $password): UsersModel
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Method to set the value of field pin
     *
     * @param string $pin
     * @return UsersModel
     */
    public function setPin(string $pin): UsersModel
    {
        $this->pin = $pin;

        return $this;
    }

    /**
     * Method to set the value of field is_active
     *
     * @param string $isActive
     * @return UsersModel
     */
    public function setIsActive(string $isActive): UsersModel
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Method to set the value of field is_Login
     *
     * @param string $isLogin
     * @return UsersModel
     */
    public function setIsLogin(string $isLogin): UsersModel
    {
        $this->isLogin = $isLogin;

        return $this;
    }

    /**
     * Method to set the value of field is_reset_password
     *
     * @param string $isResetPassword
     * @return UsersModel
     */
    public function setIsResetPassword(string $isResetPassword): UsersModel
    {
        $this->isResetPassword = $isResetPassword;

        return $this;
    }

    /**
     * Method to set the value of field last_login
     *
     * @param string $lastLogin
     * @return UsersModel
     */
    public function setLastLogin(string $lastLogin): UsersModel
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    /**
     * Method to set the value of field profile_pic
     *
     * @param string $profilePic
     * @return UsersModel
     */
    public function setProfilePic(string $profilePic): UsersModel
    {
        $this->profilePic = $profilePic;

        return $this;
    }

    /**
     * Method to set the value of field created_at
     *
     * @param string $createdAt
     * @return UsersModel
     */
    public function setCreatedAt(string $createdAt): UsersModel
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Method to set the value of field updated_at
     *
     * @param string $updatedAt
     * @return UsersModel
     */
    public function setUpdatedAt(string $updatedAt): UsersModel
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }


    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId(): int
    {
        return (int) $this->id;
    }

     /**
     * Returns the value of field firstName
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return (string) $this->firstName;
    }

    /**
     * Returns the value of field lastName
     *
     * @return string
     */
    public function getLastName(): string
    {
        return (string) $this->lastName;
    }

    /**
     * Returns the value of field username
     *
     * @return string
     */
    public function getUsername(): string
    {
        return (string) $this->username;
    }

     /**
     * Returns the value of field email
     *
     * @return string
     */
    public function getEmail(): string
    {
        return (string) $this->email;
    }

    /**
     * Returns the value of field phone
     *
     * @return string
     */
    public function getPhone(): string
    {
        return (string) $this->phone;
    }

    /**
     * Returns the value of field password
     *
     * @return string
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

     /**
     * Returns the value of field pin
     *
     * @return string
     */
    public function getPin(): string
    {
        return (string) $this->pin;
    }

    /**
     * Returns the value of field isActive
     *
     * @return string
     */
    public function getIsActive(): string
    {
        return (string) $this->isActive;
    }

    /**
     * Returns the value of field isLogin
     *
     * @return string
     */
    public function getIsLogin(): string
    {
        return (string) $this->isLogin;
    }

    /**
     * Returns the value of field isResetPassword
     *
     * @return string
     */
    public function getIsResetPassword(): string
    {
        return (string) $this->isResetPassword;
    }

    /**
     * Returns the value of field lastLogin
     *
     * @return string
     */
    public function getLastLogin(): string
    {
        return (string) $this->lastLogin;
    }

    /**
     * Returns the value of field profilePic
     *
     * @return string
     */
    public function getProfilePic(): string
    {
        return (string) $this->profilePic;
    }

    /**
     * Returns the value of field createdAt
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return (string) $this->createdAt;
    }

    /**
     * Returns the value of field updatedAt
     *
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return (string) $this->updatedAt;
    }


    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        // $this->setSchema("phalcon-backbone");
        $this->setSource("users");

        $this->addBehavior(
            new \Phalcon\Mvc\Model\Behavior\Timestampable(
                [
                    'beforeCreate' => [
                        'field'  => 'createdAt',
                        'format' => 'Y-m-d H:i:s',
                    ],
                    'beforeUpdate' => [
                        'field'  => 'updatedAt',
                        'format' => 'Y-m-d H:i:s',
                    ],
                ]
            )
        );

        // * Sets a list of attributes that must be skipped from the generated INSERT statement
        $this->skipAttributesOnCreate(
            [
                'updatedAt',
            ]
        );

        // * Sets a list of attributes that must be skipped from the generated UPDATE statement
        $this->skipAttributesOnUpdate(
            [
                'createdAt',
            ]
        );

        // * Sets if a model must use dynamic update instead of the all-field update
        $this->useDynamicUpdate(true);

        // $this->hasManyToMany(
        //     'id',
        //     '\Pbackbone\Model\UsersRoleModel',
        //     'userId',
        //     'roleId',
        //     '\Pbackbone\Model\RoleModel',
        //     'id',
        //     [
        //         'alias' => 'role',
        //     ]
        // );

        $this->hasMany(
            'id',
            '\Pbackbone\Model\UsersRoleModel',
            'userId',
            [
                'alias' => 'usersRole',
                'reusable' => true,
                'foreignKey' => [
                    'message' => 'data still being used',
                ],
            ]
        );
    }

    /**
     * Independent Column Mapping.
     * Keys are the real names in the table and the values their names in the application
     *
     * @return array
     */
    public function columnMap()
    {
        return [
            'id' => 'id',
            'first_name' => 'firstName',
            'last_name' => 'lastName',
            'username' => 'username',
            'email' => 'email',
            'phone' => 'phone',
            'password' => 'password',
            'pin' => 'pin',
            'is_active' => 'isActive',
            'is_login' => 'isLogin',
            'is_reset_password' => 'isResetPassword',
            'last_login' => 'lastLogin',
            'profile_pic' => 'profilePic',
            'created_at' => 'createdAt',
            'updated_at' => 'updatedAt'
        ];
    }
}
