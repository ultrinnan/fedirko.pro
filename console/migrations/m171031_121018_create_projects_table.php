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
            'engine' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'publish_date' => $this->integer()->notNull(),
            'status' => $this->integer(1)->notNull()->defaultValue(1),
            'favorite' => $this->integer(1)->notNull()->defaultValue(0),
        ]);

	    $this->batchInsert(
	    	'projects',
		    ['by_serhii', 'by_mary', 'url', 'engine', 'created_at', 'updated_at', 'publish_date', 'status', 'favorite'],
		    [
		        [1, 0, null, 1, time(), time(), time(), 1, 1],
		        [1, 0, 'http://professionalwebsolutions.com.au', 3, time(), time(), time(), 1, 0],
		        [1, 1, 'http://bestgates.com.ua', 3, time(), time(), time(), 1, 0],
		        [1, 0, 'http://spbsts.ru', 2, time(), time(), time(), 1, 1],
		        [1, 0, 'http://arisha.kiev.ua', 1, time(), time(), time(), 0, 0],
		        [1, 0, 'http://veldrin.kiev.ua', 1, time(), time(), time(), 1, 1],
	        ]
	    );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('projects');
    }
}
