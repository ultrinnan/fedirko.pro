<?php

use yii\db\Migration;

/**
 * Handles the creation of table `admin`.
 */
class m170221_074429_create_admin_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%admin}}', [
            'id' => $this->primaryKey(),
            'email' => $this->string()->notNull()->unique(),
            'first_name' => $this->string()->notNull(),
            'last_name' => $this->string()->notNull(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),

            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->insert('{{%admin}}', [
            'id' => '1',
            'email' => 'serhii@fedirko.pro',
            'first_name' => 'Serhii',
            'last_name' => 'Fedirko',
            'auth_key' => '_dUIjsVnWnbij3fBVEkrQeqme1BvuY3D',
            'password_hash' => '$2y$13$D7HuHhDG0KL7//BfeyB/p.9pyfz4HUZ05.ejU043SytnVlzjMF9c.', //outsoft_rulez
            'password_reset_token' => null,

            'status' => 1,
            'created_at' => time(),
            'updated_at' => time(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%admin}}');
    }
}
