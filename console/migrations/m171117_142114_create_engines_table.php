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
	        'logo' => $this->string(),
        ]);

	    $this->batchInsert(
		    'engines',
		    ['name', 'logo'],
		    [
			    ['Custom engine', ''],
			    ['SPA', ''],
			    ['WordPress', '/images/tech_logos/wordpress.png'],
			    ['Joomla', '/images/tech_logos/joomla.png'],
			    ['Yii2', '/images/tech_logos/yii2.png'],
			    ['Drupal', '/images/tech_logos/drupal.png'],
			    ['Typo3', ''],
			    ['SmartEngine', ''],
			    ['iOS and Android', ''],
			    ['iOS', ''],
			    ['Android', ''],
			    ['osCommerce', ''],
			    ['PrestaShop', ''],
			    ['OpenCart', ''],
			    ['Magento', ''],
			    ['phpBB', ''],
			    ['Slim', '/images/tech_logos/slim.png'],
			    ['Phalcon', '/images/tech_logos/phalcon.png'],
			    ['Symfony', '/images/tech_logos/symfony.png'],
			    ['Zend', '/images/tech_logos/zend.png'],
			    ['Laravel', '/images/tech_logos/laravel.png'],
			    ['Moodle', '/images/tech_logos/moodle.png'],
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
