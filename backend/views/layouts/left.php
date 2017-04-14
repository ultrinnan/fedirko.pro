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
                'encodeLabels' => true,
                'items' => [
                    [
                        'label' => 'Go to Site Home',
                        'icon' => 'share',
                        'url' => '/',
                    ],
	                ['label' => 'Menu', 'options' => ['class' => 'header']],
                    [
                        'label' => 'Site settings',
                        'icon' => 'gears',
                        'url' => ['#'],
                        'items' => [
                            ['label' => 'General', 'icon' => 'gear', 'url' => ['site-config/index']],
                            ['label' => 'Family', 'icon' => 'users', 'url' => ['admin/index']],
                        ]
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
