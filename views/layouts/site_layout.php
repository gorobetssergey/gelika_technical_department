<?php

/* @var $this \yii\web\View */
/* @var $content string */


use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\SiteAsset;
use app\models\User;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

SiteAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body onresize="WindowResize()">
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'ПМП "Геліка"',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);

    $menuItems = [];
    if(Yii::$app->user->isGuest):
        $menuItems[]=[
            'label' => 'Увійти',
            'url' => ['/site/login']
        ];
        $menuItems[]=[
            'label' => 'Реєстрація',
            'url' => ['/site/reg']
        ];
    else:
        if(Yii::$app->user->identity->role==User::ROLE_ADMIN):
            $menuItems[] = [
                'label' => 'Адмінка', 'url' => ['/admin/index'],
            ];
        endif;
        $menuItems[]=[
            'label' => 'Вийти (' . Yii::$app->user->identity->email . ')',
            'url' => ['/site/logout'],
            'linkOptions' => [
                'data-method' => 'post'
            ]
        ];
    endif;

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
    <div class="container content_s">
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
