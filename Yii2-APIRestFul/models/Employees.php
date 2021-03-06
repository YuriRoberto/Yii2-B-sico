<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employees".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property int $job_title_id
 * @property string $avatar
 *
 * @property JobTitles $jobTitle
 */
class Employees extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employees';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'job_title_id'], 'required'],
            [['job_title_id'], 'integer'],
            [['first_name', 'last_name', 'email'], 'string', 'max' => 45],
            [['avatar'], 'string', 'max' => 150],
            [['job_title_id'], 'exist', 'skipOnError' => true, 'targetClass' => JobTitles::className(), 'targetAttribute' => ['job_title_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'job_title_id' => 'Job Title ID',
            'avatar' => 'Avatar',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobTitle()
    {
        return $this->hasOne(JobTitle::className(), ['id' => 'job_title_id']);
    }

     public function fields(){
    //     $fields = parent::fields();
    //     unset($fields['avatar']);
    //     return $fields;

        return [
            'id',
            'email',
            'fotinha' => 'avatar',
            'full_name' => function($model){
                return $model->first_name . " " . $model->last_name;
            }
        ];
    }
}
