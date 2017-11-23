<?php

use yii\db\Migration;

/**
 * Handles the creation of table `projects_langs`.
 */
class m171123_071359_create_projects_langs_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('projects_langs', [
            'id' => $this->primaryKey(),
	        'project_id' => $this->integer()->notNull(),
	        'lang_id' => $this->integer()->notNull(),
	        'name' => $this->string()->notNull(),
	        'short_desc' => $this->string()->notNull(),
	        'long_desc' => $this->string()->notNull(),
        ]);

	    $this->batchInsert(
		    'projects_langs',
		    ['project_id', 'lang_id', 'name', 'short_desc', 'long_desc'],
		    [
			    [1, 1, 'My first site', 'Very first version of my portfolio site', 'Very first version of my portfolio site. But it was fast and effective.'],
			    [2, 1, 'Professional Web Solutions', 'Website for professionals from Australia', 'Мой вклад: переделка шаблона, правка CSS, переделка верстки модулей, создание 25 картинок популярных технолгий, используемых компанией (доступно >тут<)'],
			    [3, 1, 'BestGates - ворота, роллеты, шлагбаумы', 'BestGates - ворота, роллеты, шлагбаумы', 'Мой вклад: Полное создание WordPress шаблона из PSD макета с применением Bootstrap, настройка, программирование. Реализованы Call back (отправка СМС с сайта на номер менеджера), проверка на робота (reCAPTCHA), модальное окно и выпадающее меню на чистом CSS'],
			    [4, 1, 'Современные Технологии Строительства', 'Современные Технологии Строительства.', 'полная настройка CMS сайта, переделка/дорисовка шаблона, правка CSS, подключение/изменение модулей.'],
			    [5, 1, 'Песональный сайт ивент-менеджера Арины Ткаченко', 'Песональный сайт ивент-менеджера Арины Ткаченко', 'корректировка шаблона, правка CSS, обновление и чистка движка, наполнение.'],
			    [6, 1, 'Командный сайт киевского клуба ролевого моделирования "Вэльдрин"', 'Командный сайт киевского клуба ролевого моделирования "Вэльдрин"', 'полная настройка CMS сайта, переделка/дорисовка шаблона, правка CSS, подключение/изменение модулей, наполнение.'],
		    ]
	    );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('projects_langs');
    }
}
