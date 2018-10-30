<?php

use yii\db\Migration;

/**
 * Handles the creation of table `donations`.
 */
class m181029_122019_create_donations_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('donations', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('donations');
    }
}
