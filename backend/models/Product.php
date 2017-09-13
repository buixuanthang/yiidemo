<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_product".
 *
 * @property integer $Pro_id
 * @property string $Pro_name
 * @property integer $Price
 * @property integer $SaleOf
 * @property string $StartSale
 * @property string $EndSale
 * @property integer $PriceSale
 * @property integer $Quanlity
 * @property string $Size
 * @property string $Color
 * @property string $Evaluation
 * @property string $Tags
 * @property string $Image
 * @property string $Keywords
 * @property string $Description
 * @property string $Content
 * @property integer $GroupID
 * @property integer $Status
 * @property integer $CateID
 * @property integer $SuppliresID
 * @property integer $UserID
 * @property string $CreatedAt
 * @property string $UpdateAt
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Pro_name', 'Price', 'SaleOf', 'StartSale', 'EndSale', 'PriceSale', 'Quanlity', 'Size', 'Color', 'Evaluation', 'Tags', 'Image', 'Keywords', 'Description', 'Content', 'GroupID', 'CateID', 'SuppliresID', 'UserID', 'CreatedAt', 'UpdateAt'], 'required'],
            [['Price', 'SaleOf', 'PriceSale', 'Quanlity', 'GroupID', 'Status', 'CateID', 'SuppliresID', 'UserID', 'CreatedAt', 'UpdateAt'], 'integer'],
            [['StartSale', 'EndSale'], 'safe'],
            [['Pro_name', 'Size', 'Color', 'Evaluation', 'Tags', 'Image', 'Keywords', 'Description', 'Content'], 'string', 'max' => 255],
            [['Pro_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Pro_id' => 'Pro ID',
            'Pro_name' => 'Pro Name',
            'Price' => 'Price',
            'SaleOf' => 'Sale Of',
            'StartSale' => 'Start Sale',
            'EndSale' => 'End Sale',
            'PriceSale' => 'Price Sale',
            'Quanlity' => 'Quanlity',
            'Size' => 'Size',
            'Color' => 'Color',
            'Evaluation' => 'Evaluation',
            'Tags' => 'Tags',
            'Image' => 'Image',
            'Keywords' => 'Keywords',
            'Description' => 'Description',
            'Content' => 'Content',
            'GroupID' => 'Group ID',
            'Status' => 'Status',
            'CateID' => 'Cate ID',
            'SuppliresID' => 'Supplires ID',
            'UserID' => 'User ID',
            'CreatedAt' => 'Created At',
            'UpdateAt' => 'Update At',
        ];
    }
}
