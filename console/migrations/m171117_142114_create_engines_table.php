<?php

use yii\db\Migration;

/**
 * Handles the creation of table `engines`.
 */
class m171117_142114_create_engines_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('engines', [
            'id' => $this->primaryKey(),
	        'name' => $this->string()->notNull(),
        ]);

	    $this->batchInsert(
		    'engines',
		    ['name'],
		    [
			    ['Custom engine'],
			    ['SPA'],
			    ['WordPress'],
			    ['Joomla'],
			    ['Yii2'],
		    ]
	    );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('engines');
    }
}
