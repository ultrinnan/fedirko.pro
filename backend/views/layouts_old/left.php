<aside class="main-sidebar">

    <section class="sidebar">

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    [
                        'label' => 'Settings',
                        'icon' => 'fa fa-gears',
                        'url' => ['#'],
                        'items' => [
                            ['label' => 'General', 'icon' => 'fa  fa-gear', 'url' => ['site-config/index']],
                            ['label' => 'Users', 'icon' => 'fa  fa-user-secret', 'url' => ['user/index']],
	                        ['label' => 'My profile', 'icon' => 'fa fa-user', 'url' => ['user/view?id=' . Yii::$app->user->id]],
	                        ['label' => 'Roles', 'icon' => 'fa  fa-gear', 'url' => ['roles/index']],
                        ]
                    ],
	                [
		                'label' => 'Customers',
		                'icon' => 'fa fa-gear',
		                'url' => ['customers/index'],
	                ],
	                [
                        'label' => 'Cards',
                        'icon' => 'fa fa-gear',
                        'url' => ['cards/index'],
                    ],
	                [
                        'label' => 'Orders',
                        'icon' => 'fa fa-gear',
                        'url' => ['orders/index'],
                    ],
	                [
                        'label' => 'Products',
                        'icon' => 'fa fa-gear',
                        'url' => ['products/index'],
                    ],
	                [
                        'label' => 'Invoices',
                        'icon' => 'fa fa-gear',
                        'url' => ['invoices/index'],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
