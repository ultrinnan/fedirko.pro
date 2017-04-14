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
                    [
                        'label' => 'Go to Site Home',
                        'icon' => 'fa fa-share',
                        'url' => Yii::getAlias('@frontend_url'),
                    ],
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    [
                        'label' => 'Site settings',
                        'icon' => 'fa fa-gears',
                        'url' => ['#'],
                        'items' => [
                            ['label' => 'General', 'icon' => 'fa  fa-gear', 'url' => ['site-config/index']],
                            ['label' => 'Administrators', 'icon' => 'fa  fa-user-secret', 'url' => ['admin/index']],
                            ['label' => 'My profile', 'icon' => 'fa fa-user', 'url' => ['admin/view?id=' . Yii::$app->user->id]],
                        ]
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
