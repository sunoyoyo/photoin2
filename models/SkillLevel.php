<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "skill_level".
 *
 * @property integer $id
 * @property string $skill_level
 *
 * @property PhotographerSkill[] $photographerSkills
 */
class SkillLevel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'skill_level';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['skill_level'], 'required'],
            [['skill_level'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'skill_level' => 'Skill Level',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhotographerSkills()
    {
        return $this->hasMany(PhotographerSkill::className(), ['id_skill_level' => 'id']);
    }
}
