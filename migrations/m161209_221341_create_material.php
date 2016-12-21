<?php

use yii\db\Migration;

class m161209_221341_create_material extends Migration
{
    public function safeUp()
    {
        $this->createTable('demention',[
            'id' => $this->primaryKey(),
            'name' => $this->string(10)->notNull(),
        ]);

        $this->createTable('material',[
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull(),
            'demention' => $this->integer(11)->notNull()
        ]);
        $this->createIndex(
            'id_demention',
            'material',
            'demention'
        );
        $this->addForeignKey(
            'fx_demention',
            'material',
            'demention',
            'demention',
            'id',
            'CASCADE'
        );
    }

    public function safeDown()
    {
        $this->dropTable('material');
        $this->dropTable('dem');
    }
}