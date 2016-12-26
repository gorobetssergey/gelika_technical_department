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
            'demention1' => $this->integer(11)->notNull()
        ]);
        $this->createIndex(
            'id_demention',//довільне імя індекса
            'material',//назва таблиці
            'demention1'//куди вставлятиметься ссилка
        );
        $this->addForeignKey(
            'fx_demention',//назва ключа довільно
            'material',//назва таблиці, куди вставлятиметьс ссилка
            'demention1',//поле, яке становлює звязок
            'demention', //назва таблиці, в яку йде ссилка
            'id',  // поле з яким встан щвязок
            'CASCADE'
        );
    }

    public function safeDown()
    {
        $this->dropTable('material');
        $this->dropTable('dem');
    }
}