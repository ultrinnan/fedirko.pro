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
            'name' => $this->string()->notNull(),
            'short_desc' => $this->text()->notNull(),
            'long_desc' => $this->text()->notNull(),
            'engine' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'publish_date' => $this->integer()->notNull(),
            'status' => $this->integer(1)->notNull()->defaultValue(1),
            'favorite' => $this->integer(1)->notNull()->defaultValue(0),
        ]);

	    $this->batchInsert(
	    	'projects',
		    ['by_serhii', 'by_mary', 'url', 'name', 'short_desc', 'long_desc', 'engine', 'created_at', 'updated_at', 'publish_date', 'status', 'favorite'],
		    [
		        [1, 0, null, 'My first site', 'Very first version of my portfolio site', 'Very first version of my portfolio site. But it was fast and effective.', 1, time(), time(), time(), 1, 0],
		        [1, 0, 'http://professionalwebsolutions.com.au', 'Professional Web Solutions', 'Website for professionals from Australia', 'Мой вклад: переделка шаблона, правка CSS, переделка верстки модулей, создание 25 картинок популярных технолгий, используемых компанией (доступно >тут<)', 3, time(), time(), time(), 1, 0],
		        [1, 1, 'http://bestgates.com.ua', 'BestGates - ворота, роллеты, шлагбаумы', 'BestGates - ворота, роллеты, шлагбаумы', 'Мой вклад: Полное создание WordPress шаблона из PSD макета с применением Bootstrap, настройка, программирование. Реализованы Call back (отправка СМС с сайта на номер менеджера), проверка на робота (reCAPTCHA), модальное окно и выпадающее меню на чистом CSS', 3, time(), time(), time(), 1, 0],
		        [1, 0, 'http://spbsts.ru', 'Современные Технологии Строительства', 'Современные Технологии Строительства.', 'полная настройка CMS сайта, переделка/дорисовка шаблона, правка CSS, подключение/изменение модулей.', 2, time(), time(), time(), 1, 0],
		        [1, 0, 'http://arisha.kiev.ua', 'Песональный сайт ивент-менеджера Арины Ткаченко', 'Песональный сайт ивент-менеджера Арины Ткаченко', 'корректировка шаблона, правка CSS, обновление и чистка движка, наполнение.', 1, time(), time(), time(), 1, 0],
		        [1, 0, 'http://veldrin.kiev.ua', 'Командный сайт киевского клуба ролевого моделирования "Вэльдрин"', 'Командный сайт киевского клуба ролевого моделирования "Вэльдрин"', 'полная настройка CMS сайта, переделка/дорисовка шаблона, правка CSS, подключение/изменение модулей, наполнение.', 1, time(), time(), time(), 1, 0],
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
