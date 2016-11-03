<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bank".
 *
 * @property integer $id
 * @property string $bank
 *
 * @property PhotographerDetail[] $photographerDetails
 */
class Bank extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bank';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bank'], 'required'],
            [['bank'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bank' => 'Bank',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhotographerDetails()
    {
        return $this->hasMany(PhotographerDetail::className(), ['bank_id' => 'id']);
    }
}
