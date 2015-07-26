<?php

use yii\db\Schema;
use yii\db\Migration;

class m150726_164813_create_user_table extends Migration
{
    public function up()
    {
        $this->createTable(
            'user',
            [
                'id' => Schema::TYPE_INTEGER,
                'login' => Schema::TYPE_STRING.'(45)',
                'password' => Schema::TYPE_STRING.'(40)',
                'email' => Schema::TYPE_STRING.'(40)',
            ]
        );

        //$this->addForeignKey('post_user', 'post', 'author_id', 'user', 'id', 'cascade', 'cascade');
    }

    public function safeDown()
    {
        //$this->dropForeignKey('post_user', 'user');
        $this->dropTable('user');
    }
}