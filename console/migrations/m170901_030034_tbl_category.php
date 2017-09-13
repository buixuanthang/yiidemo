<?php

use yii\db\Migration;

class m170901_030034_tbl_category extends Migration
{
    public function up()
    {
         $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tbl_category}}', [
            'cat_id' => $this->primaryKey(),
            'cat_name' => $this->string()->notNull()->unique(),
            'icon' => $this->string()->notNull(),
            'parent_id' => $this->integer()->notNull(),
            'keywords' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'order' => $this->integer()->notNull(),
            'group_id' => $this->integer()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
       $this->dropTable('{{%tbl_category}}');
    }
}
