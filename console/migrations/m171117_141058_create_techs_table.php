<?php

use yii\db\Migration;

/**
 * Handles the creation of table `techs`.
 */
class m171117_141058_create_techs_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('techs', [
            'id' => $this->primaryKey(),
	        'name' => $this->string()->notNull()
        ]);

	    $this->batchInsert(
		    'techs',
		    ['name'],
		    [
			    ['PHP'],
			    ['HTML'],
			    ['CSS'],
			    ['JavaScript'],
			    ['SQL'],
				['jQuery'],
				['Bootstrap'],
				['AJAX'],
				['PhoneGap'],
				['API'],
				['AngularJS'],
				['SMARTY'],
				['Twig'],
		    ]
	    );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('techs');
    }
}
