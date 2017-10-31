<?php

use yii\db\Migration;

/**
 * Handles the creation of table `projects`.
 */
class m171031_121018_create_projects_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('projects', [
            'id' => $this->primaryKey(),
            'by_serhii' => $this->integer(1)->notNull(),
            'by_mary' => $this->integer(1)->notNull(),
            'url' => $this->string(),
            'name' => $this->string(),
            'short_desc' => $this->text(),
            'long_desc' => $this->text(),
            'engine' => $this->integer(),
            'create_date' => $this->integer(),
            'publish_date' => $this->integer(),
            'status' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('projects');
    }
}
