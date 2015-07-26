<?php

use yii\db\Schema;
use yii\db\Migration;

class m150726_171146_create_post_table extends Migration
{
    public function safeUp()
    {
        $this->createTable(
            'post',
            [
                'id' => Schema::TYPE_PK,
                'value' => Schema::TYPE_STRING.'(2048)',
                'author_id' => Schema::TYPE_INTEGER,
                'date' => Schema::TYPE_DATETIME,
                'views' => Schema::TYPE_INTEGER,
                'describe' => Schema::TYPE_STRING.'(500)',
            ]
        );
    }

    public function safeDown()
    {
        $this->dropTable('post');
    }

}
