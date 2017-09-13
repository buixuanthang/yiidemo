<?php

use yii\db\Migration;

class m170830_063128_tbl_province extends Migration
{
    // public function safeUp()
    // {

    // }

    // public function safeDown()
    // {
    //     echo "m170830_063128_tbl_province cannot be reverted.\n";

    //     return false;
    // }

    // /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tbl_province}}', [
            'pro_id' => $this->primaryKey(),
            'pro_name' => $this->string()->notNull()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%tbl_province}}');
    }
    
}
