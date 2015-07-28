<?php

use yii\db\Schema;
use yii\db\Migration;

class m150728_073502_update_user_table extends Migration
{
    public function safeUp()
    {
        $this->addPrimaryKey('id', 'user', 'id');
        $this->alterColumn('user', 'id', 'INT(11) UNSIGNED NOT NULL AUTO_INCREMENT');
        $this->alterColumn('user', 'login', 'VARCHAR(45) NOT NULL');
        $this->alterColumn('user', 'password', 'VARCHAR(40) NOT NULL');

        $this->createIndex('login_UNIQUE', 'user', 'login', true);
        $this->createIndex('email_UNIQUE', 'user', 'email', true);
    }
    
    public function safeDown()
    {
        $this->dropTable('user');
    }

}
