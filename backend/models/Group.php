<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_group".
 *
 * @property integer $group_id
 * @property string $group_name
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Group extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_group';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['group_name', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['group_name'], 'string', 'max' => 255],
            [['group_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'group_id' => 'Group ID',
            'group_name' => 'Group Name',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
    public function getAllGroup(){
        $data= Group::find()
        ->where(['status'=>'1'])
        ->asArray()
        ->all();
        return $data;
    }
    

}
