<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title).' | '.Yii::$app->name ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
//                'brandLabel' => 'LinStor.net',
//                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    [
                        'label' => 'Home',
                        'url'   => Url::to(['post/add']),
                    ],
                    [
                        'label'   => 'Register',
                        'url'     => Url::to(['user/register']),
                        'visible' => Yii::$app->user->isGuest,
                    ],
                    [
                        'label'   => 'Login',
                        'url'     => Url::to(['user/login']),
                        'visible' => Yii::$app->user->isGuest,
                    ],
                    [
                        'label' => Yii::$app->user->identity->login,
                        'items' => [
                            [
                                'label' => 'Profile',
                                'url' => Url::to(['user/view', 'id'=> Yii::$app->user->id])
                            ],
                            [
                                'label' => 'Logout',
                                'url' => Url::to(['user/logout']),
                                'linkOptions' => ['data-method' => 'post'],
                            ],
                        ],
                        'visible' => !Yii::$app->user->isGuest,
                    ],
                ],
            ]);
            NavBar::end();
        ?>

        <div class="container">
            <?/*= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])*/ ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">LinStor.net <?= " (v.".Yii::$app->version.")"; ?></p>
            <p class="pull-right"><?//= Yii::powered() ?></p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
