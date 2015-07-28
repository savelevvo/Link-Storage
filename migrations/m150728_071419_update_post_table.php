<?php

use yii\db\Schema;
use yii\db\Migration;

class m150728_071419_update_post_table extends Migration
{
    public function safeUp()
    {
        $this->alterColumn('post', 'id', 'INT(11) UNSIGNED NOT NULL AUTO_INCREMENT');
        $this->alterColumn('post', 'value', 'VARCHAR(2048) NOT NULL');
        $this->alterColumn('post', 'author_id', 'INT(11) UNSIGNED NOT NULL');
        $this->alterColumn('post', 'date', 'DATETIME NOT NULL');
        $this->alterColumn('post', 'views', 'INT(11) UNSIGNED NOT NULL DEFAULT 0');
        $this->renameColumn('post', 'describe', 'descr');
        $this->alterColumn('post', 'descr', 'VARCHAR(500) NULL');
    }

    public function safeDown()
    {
        $this->dropTable('post');
    }

}
