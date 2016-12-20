<?php

use yii\db\Migration;

class m161209_221341_create_material extends Migration
{
    public function safeUp()
    {
        $this->createTable('dem',[
            'id' => $this->primaryKey(),
            'name' => $this->string(10)
        ]);

        $this->createTable('material',[
            'id' => $this->primaryKey(),
            'name' => $this->string(50),
            'dem' => $this->string(10)
        ]);
        $this->createIndex(
            'id_dem',
            'material',
            'dem'
        );
        $this->addForeignKey(
            'fx_dem',
            'material',
            'dem',
            'dem',
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