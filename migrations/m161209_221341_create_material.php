<?php

use yii\db\Migration;

class m161209_221341_create_material extends Migration
{
    public function safeUp()
    {
       $this->createTable('material',[
            'id' => $this->primaryKey(),
            'name_mat' => $this->string(50)->notNull(),
            'name_dem' => $this->string(50)->notNull(),
            'weight' => $this->integer(4)->notNull(),
        ]);

        /*$this->createTable('material',[
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull(),
            'dem_name' => $this->string(50)->notNull(),
            'dem'=>$this->integer(11)->notNull(),
        ]);
        /*$this->createIndex(
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
        );*/
    }

    public function safeDown()
    {
        $this->dropTable('material');
       /* $this->dropTable('dem');*/
    }
}