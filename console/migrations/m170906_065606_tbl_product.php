<?php

use yii\db\Migration;

class m170906_065606_tbl_product extends Migration
{
    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

         $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%tbl_product}}', [
            'Pro_id' => $this->primaryKey(),
            'Pro_name' => $this->string()->notNull()->unique(),
            'Price' => $this->integer()->notNull(),
            'SaleOf' => $this->integer()->notNull(),
            'StartSale' => $this->date()->notNull(),
            'EndSale' => $this->date()->notNull(),
            'PriceSale' => $this->integer()->notNull(),
            'Quanlity' => $this->integer()->notNull(),
            'Size' => $this->string()->notNull(),
            'Color' => $this->string()->notNull(),
            'Evaluation' => $this->string()->notNull(),
            'Tags' => $this->string()->notNull(),
            'Image' => $this->string()->notNull(),
            'Keywords' => $this->string()->notNull(),
            'Description' => $this->string()->notNull(),
            'Keywords' => $this->string()->notNull(),
            'Content' => $this->string()->notNull(),
            'GroupID' => $this->integer()->notNull(),
            'Status' => $this->smallInteger()->notNull()->defaultValue(1),
            'CateID' => $this->integer()->notNull(),
            'SuppliresID' => $this->integer()->notNull(),
            'UserID' => $this->integer()->notNull(),
            'CreatedAt' => $this->date()->notNull(),
            'UpdateAt' => $this->date()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%tbl_product}}');
    }
    
}


