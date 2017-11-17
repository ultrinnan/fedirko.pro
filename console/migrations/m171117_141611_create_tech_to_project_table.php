<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tech_to_project`.
 */
class m171117_141611_create_tech_to_project_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tech_to_project', [
            'id' => $this->primaryKey(),
	        'tech_id' => $this->integer()->notNull(),
	        'project_id' => $this->integer()->notNull()
        ]);

	    $this->batchInsert(
		    'tech_to_project',
		    ['tech_id', 'project_id'],
		    [
			    [1, 1],
			    [2, 1],
			    [3, 1],
			    [4, 1],

			    [2, 2],
			    [3, 2],

			    [2, 3],
			    [3, 3],
			    [1, 3],
			    [4, 3],
			    [5, 3],

			    [1, 4],
			    [2, 4],
			    [3, 4],
			    [5, 4],

			    [4, 5],
		    ]
	    );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tech_to_project');
    }
}
