<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contactus".
 *
 * @property integer $id
 * @property string $username
 * @property string $email
 * @property string $phone
 * @property string $message
 */
class Contactus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $check;
    public static function tableName()
    {
        return 'contactus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'email', 'phone', 'message'], 'required'],
            [['username', 'email', 'phone', 'message'], 'string', 'max' => 255],
            [['email'],'email'],
            [['phone'],'string', 'length' => [9, 14]],
            [['message'],'string','min'=>20,'max'=>255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => '',
            'email' => '',
            'phone' => '',
            'message' => '',
        ];
    }
}
