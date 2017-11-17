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
		        [1, 0, 'http://chernozem.kiev.ua', 'Чернозем', 'Установка и настройка системы SMS оповещений.', 'На сайте был добавлен функционал обратной связи (Call-back) от сервиса SMSC. При заполнении формы в модальном окне, менеджер компании получает СМС с контактными данными клиента. Осуществляется проверка на робота (reCAPTCHA).', 2, time(), time(), time(), 1, 0],
		        [1, 0, 'http://ekastroy.com.ua', 'Строительная компания Эка Строй Плюс', 'Строительная компания Эка Строй Плюс', 'Сайт был заражен вирусами, в результате чего он был полностью заблокирован поисковыми системами Google и Yandex (при попытке зайти Chrome блокировал сайт и сигнализировал об опасности. Был произведен детальный анализ содержимого сайта, выявлены и убраны элементы вредоносного кода в i-frame и внесены правки в шаблон. После успешной чистки сайт был отправлен на проверку всем поисковым системам и вернулся к нормальной работе.', 1, time(), time(), time(), 1, 0],
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
