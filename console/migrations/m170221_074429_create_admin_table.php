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

        $this->batchInsert('{{%admin}}',
            //default - drowcity
            ['id', 'email', 'first_name', 'last_name', 'auth_key', 'password_hash', 'password_reset_token', 'status', 'created_at', 'updated_at'],
            [
                ['1', 'serhii@fedirko.pro', 'Serhii', 'Fedirko', '_dUIjsVnWnbij3fBVEkrQeqme1BvuY3D', '$2y$13$nyurQJZ9hoNzZnlEsWUlyeWIgOr8B9QH9j7yMPdwPDplBqQco/Mzm', null, 1, time(), time()],
                ['2', 'mary@fedirko.pro', 'Mary', 'Fedirko', '_dUIjsVnWnbij3fBVEkrQeqme1BvuY3D', '$2y$13$nyurQJZ9hoNzZnlEsWUlyeWIgOr8B9QH9j7yMPdwPDplBqQco/Mzm', null, 1, time(), time()],
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
