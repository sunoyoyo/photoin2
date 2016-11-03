<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "photographer_detail".
 *
 * @property integer $id
 * @property integer $id_user
 * @property string $events
 * @property string $awards
 * @property string $camera
 * @property string $website
 * @property integer $bank_id
 * @property string $no_rekening
 *
 * @property User $idUser
 */
class PhotographerDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'photographer_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'events', 'awards', 'camera', 'bank_id', 'no_rekening'], 'required'],
            [['id_user', 'bank_id'], 'integer'],
            [['events', 'awards'], 'string', 'max' => 500],
            [['camera'], 'string', 'max' => 255],
         
            [['no_rekening'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'events' => 'Events',
            'awards' => 'Awards',
            'camera' => 'Camera',
            
            'bank_id' => 'Bank ID',
            'no_rekening' => 'No Rekening',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }


     public function getBank()
   {
       return $this->hasOne(Bank::className(), ['id' => 'bank_id']);
   }
   
}
