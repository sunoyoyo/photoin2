<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "photographer_skill".
 *
 * @property integer $id
 * @property integer $id_user
 * @property integer $id_skill
 * @property integer $id_skill_level
 * @property integer $price
 *
 * @property Skill $idSkill
 * @property SkillLevel $idSkillLevel
 * @property User $idUser
 */
class PhotographerSkill extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'photographer_skill';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'id_skill', 'id_skill_level', 'price'], 'required'],
            [['id_user', 'id_skill', 'id_skill_level', 'price'], 'integer']
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
            'id_skill' => 'Id Skill',
            'id_skill_level' => 'Id Skill Level',
            'price' => 'Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdSkill()
    {
        return $this->hasOne(Skill::className(), ['id_skill' => 'id_skill']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdSkillLevel()
    {
        return $this->hasOne(SkillLevel::className(), ['id' => 'id_skill_level']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(\common\models\User::className(), ['id' => 'id_user']);
    }
}
