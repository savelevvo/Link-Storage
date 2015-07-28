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
    }

    public function safeDown()
    {
        $this->dropTable('user');
    }
}