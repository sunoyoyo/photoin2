<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "skill".
 *
 * @property integer $id_skill
 * @property string $skillname
 * @property string $photo
 *
 * @property PhotographerSkill[] $photographerSkills
 */
class Skill extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'skill';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['skillname'], 'required'],
            [['skillname'], 'string', 'max' => 100],
            [['photo'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_skill' => 'Id Skill',
            'skillname' => 'Skillname',
            'photo' => 'Photo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhotographerSkills()
    {
        return $this->hasMany(PhotographerSkill::className(), ['id_skill' => 'id_skill']);
    }
}
