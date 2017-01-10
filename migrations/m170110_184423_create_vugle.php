<?php

use yii\db\Migration;

class m170110_184423_create_vugle extends Migration
{
    public function up()
    {
        $this->createTable('vugle',[
            'id'=>$this->primaryKey(),
            'dr_kof'=>$this->double(6)->notNull(),
            'vug_kof'=>$this->double(6)->notNull()
        ]);
    }
    public function safeDown()
    {
        $this->dropTable('vugle');
    }
}
