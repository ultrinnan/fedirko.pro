<?php

use yii\db\Migration;

/**
 * Handles the creation of table `projects_techs`.
 */
class m171117_141611_create_projects_techs_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('projects_techs', [
            'id' => $this->primaryKey(),
            'project_id' => $this->integer()->notNull(),
	        'tech_id' => $this->integer()->notNull()
        ]);

	    $this->batchInsert(
		    'projects_techs',
		    ['project_id', 'tech_id'],
		    [
			    [1, 1],
			    [1, 2],
			    [1, 3],
			    [1, 4],

			    [2, 2],
			    [2, 3],

			    [3, 2],
			    [3, 2],
			    [3, 3],
			    [3, 4],
			    [3, 5],

			    [4, 1],
			    [4, 2],
			    [4, 3],
			    [4, 5],

			    [5, 4],
			    [5, 4],

			    [6, 5],
			    [6, 5],
		    ]
	    );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('projects_techs');
    }
}
