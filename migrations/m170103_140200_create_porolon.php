<?php

use yii\db\Migration;

class m170103_140200_create_porolon extends Migration
{
    public function safeUp()
    {
        $this->createTable('porolon', [
            'id' => $this->primaryKey(),
            'name_mat' => $this->string(50)->notNull(),
            'height' => $this->integer(4)->notNull(),
            'destiny'=>$this->integer(4)->notNull(),
        ]);
    }
    public function safeDown()
    {
        $this->dropTable('porolon');
    }
}
