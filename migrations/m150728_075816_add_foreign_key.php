<?php

use yii\db\Schema;
use yii\db\Migration;

class m150728_075816_add_foreign_key extends Migration
{
    public function safeUp()
    {
        $this->addForeignKey('post_user', 'post',
            'author_id', 'user', 'id', 'cascade', 'cascade');
    }
    
    public function safeDown()
    {
        $this->dropForeignKey('post_user', 'post');
    }
}
