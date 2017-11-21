<?php

use yii\db\Migration;

/**
 * Handles the creation of table `projects_images`.
 */
class m171121_205244_create_projects_images_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('projects_images', [
            'id' => $this->primaryKey(),
	        'project_id' =>$this->integer()->notNull(),
	        'img' =>$this->string(),
	        'thumb' =>$this->string(),
	        'main' =>$this->integer(1)->notNull()->defaultValue(0),
        ]);

	    $this->batchInsert(
		    'projects_images',
		    ['project_id', 'img', 'thumb', 'main'],
		    [
			    [1, 'site-fedirko.jpg', 'site-fedirko_m.jpg', 1],
			    [1, 'site-fedirko.jpg', 'site-fedirko_m.jpg', 0],
			    [1, 'site-fedirko.jpg', 'site-fedirko_m.jpg', 0],

			    [2, 'site-pws.jpg', 'site-pws_m.jpg', 1],
			    [2, 'site-pws.jpg', 'site-pws_m.jpg', 0],

			    [3, 'site-bestgates.jpg', 'site-bestgates_m.jpg', 1],
			    [3, 'site-bestgates.jpg', 'site-bestgates_m.jpg', 0],
			    [3, 'site-bestgates.jpg', 'site-bestgates_m.jpg', 0],

			    [4, 'site-spbsts.jpg', 'site-spbsts_m.jpg', 1],

			    [5, 'site-arisha.jpg', 'site-arisha_m.jpg', 1],

			    [6, 'site-veldrin.jpg', 'site-veldrin_m.jpg', 1],
		    ]
	    );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('projects_images');
    }
}
