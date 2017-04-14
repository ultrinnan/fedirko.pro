<?php

use yii\db\Migration;

/**
 * Handles the creation of table `site_config`.
 */
class m170221_074718_create_config_table extends Migration
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

        $this->createTable('{{%site_config}}', [
            'id' => $this->primaryKey(),
            'key' => $this->string(45)->notNull(),
            'value' => $this->text(),
            'name' => $this->string(),
            'description' => $this->text(),
        ], $tableOptions);

	    $this->insert('{{%site_config}}', [
		    'id' => 1,
		    'key' => 'site_name',
		    'value' => 'Site Name',
		    'name' => 'Site Name',
		    'description' => 'This site name will be shown on all site pages',
	    ],
	    [
		    'id' => 2,
		    'key' => 'admin_email',
		    'value' => 'sergey@outsoft.com',
		    'name' => 'Admin\'s e-mail',
		    'description' => 'General e-mail for administrative purposes (reports etc.)',
	    ],
	    [
		    'id' => 3,
		    'key' => 'contact_email',
		    'value' => 'sergey@outsoft.com',
		    'name' => 'Contact e-mail',
		    'description' => 'General e-mail for Contact page and to show on site',
	    ]);
    }
    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%site_config}}');
    }
}
