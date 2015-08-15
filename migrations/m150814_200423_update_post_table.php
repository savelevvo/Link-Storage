<?php

use yii\db\Schema;
use yii\db\Migration;

class m150814_200423_update_post_table extends Migration
{
    public function safeUp()
    {
        $this->alterColumn('post', 'author_id', ' INT(11) UNSIGNED NULL');
    }
    
    public function safeDown()
    {
        $this->alterColumn('post', 'author_id', ' INT(11) UNSIGNED NOT NULL');
    }
}
