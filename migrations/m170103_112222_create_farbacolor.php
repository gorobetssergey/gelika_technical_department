<?php

use yii\db\Migration;

class m170103_112222_create_farbacolor extends Migration
{
    public function safeUp()
    {
        $this->createTable('farbacolor', [
            'id' => $this->primaryKey(),
            'name_mat' => $this->string(50)->notNull(),
            'sq_dem' => $this->double(8)->notNull(),
        ]);
    }


    public function safeDown()
    {
        $this->dropTable('farbacolor');
    }

}
