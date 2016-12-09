<?php

use yii\db\Migration;

class m161209_144428_create_table_user extends Migration
{
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'email' => $this->string(30)->notNull(),//email(login)
            'active' => $this->boolean()->notNull()->defaultValue(true),// active = 1=>allow input, active = 0=>ban in..
            'password' => $this->string(255)->notNull(),//password
            'repassword' => $this->string(255)->notNull(),//repeat password (when you change the password to remember previous)
            'token' => $this->string(255)->notNull(),//personal token
            'role' => $this->integer()->defaultValue(1),//relations role.id
            'created' => $this->dateTime()->notNull(),// data created
            'auth' => $this->boolean()->defaultValue(false)// active ,logged...(prohibition simultaneous input from different browsers and devices)
        ]);

        /**
         *create index table users
         */
        $this->createIndex(
            'idx-users_id_role',
            'users',//table users
            'role'//users.role
        );
        /**
         *create relations table users < -- > role
         */
        $this->addForeignKey(
            'fk-users_id_role',
            'users',
            'role',//users.role
            'role',
            'id',//role.id
            'CASCADE'
        );
    }

    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-users_id_role',
            'users'
        );
        $this->dropIndex(
            'idx-users_id_role',
            'users'
        );
        $this->dropTable('users');
    }
}
