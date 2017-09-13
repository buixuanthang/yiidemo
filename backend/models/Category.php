<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_category".
 *
 * @property integer $cat_id
 * @property string $cat_name
 * @property string $icon
 * @property integer $parent_id
 * @property string $keywords
 * @property string $description
 * @property integer $order
 * @property integer $group_id
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_name', 'icon','parent_id', 'keywords', 'description', 'order', 'group_id', 'created_at', 'updated_at'], 'required','message'=>'không được để trống'],
            [['parent_id', 'order', 'group_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['cat_name', 'icon', 'keywords', 'description'], 'string', 'max' => 255],
            [['cat_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cat_id' => 'Cat ID',
            'cat_name' => 'Tên danh mục',
            'icon' => 'Ảnh',
            'parent_id' => 'Danh mục cha',
            'keywords' => 'Từ khóa',
            'description' => 'Mô tả',
            'order' => 'Thứ tự hiển thị',
            'group_id' => 'Nhóm danh mục',
            'status' => 'Trạng thái',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
    public $data;
    public function getCategoryParent($parent=0,$level=""){
        $result=Category::find()->asArray()->where('parent_id = :parent',['parent'=>$parent])->all();
        $level.="-";
        foreach ($result as $key => $value) {
            if($parent==0){
                $level="";
            }
            $this->data[$value["cat_id"]] = $level . $value["cat_name"];
            self::getCategoryParent($value["cat_id"],$level);// đệ qui gọi lại hàm chính nó
        }
        return $this->data;
    }
    // public function getAllCategory(){
    //     $data= Category::find()
    //     ->where(['status'=>'1'])
    //     ->asArray()
    //     ->all();
    //     return $data;
    // }
}
