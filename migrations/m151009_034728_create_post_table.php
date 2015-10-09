<?php

use yii\db\Schema;
use yii\db\Migration;

class m151009_034728_create_post_table extends Migration
{
    public function up()
    {
        $this->createTable('post', [
            'id' => 'pk',
            'title' => Schema::TYPE_STRING.' NOT NULL',
            'content' =>Schema::TYPE_TEXT,
        ]);
    }

    public function down()
    {
        echo "m151009_034728_create_post_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
