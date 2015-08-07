<?php

use yii\db\Schema;
use yii\db\Migration;

class m150807_114427_update_pass_length extends Migration
{

    public function safeUp()
    {
        $this->alterColumn('user', 'password', 'VARCHAR(60) NOT NULL');
    }
    
    public function safeDown()
    {
        $this->alterColumn('user', 'password', 'VARCHAR(40) NOT NULL');
    }

}
