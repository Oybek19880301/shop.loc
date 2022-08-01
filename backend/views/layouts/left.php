<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Shop Admin</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Shop Menu', 'options' => ['class' => 'header']],
                    ['label' => 'Mahsulotlar', 'icon' => 'fas fa-shopping-cart', 'url' => ['#']],
                    ['label' => 'Kategoriyalar', 'icon' => 'fas fa-cart-plus', 'url' => ['category/index']],
                    ['label' => 'Konfiguratsiyalr', 'icon' => ' fa-gears (alias)', 'url' => ['#']],
                    ['label' => 'Xabarlar', 'icon' => ' fa-envelope-o', 'url' => ['#']],
                    ['label' => 'Foydalanuvchilar', 'icon' => ' fa-users', 'url' => ['#']],
                    ['label' => 'Ma`lumotlarim', 'icon' => ' fa-file-text', 'url' => ['#']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],

                ],
            ]
        ) ?>

    </section>

</aside>
