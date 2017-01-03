<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = 'Admin Lebedich';
?>
<div class="container-fluid">
    <div class="row">
        <div class="row">
            <div class="col-xs-12 col-md-8 col-lg-8">
                <dl>
                    <dt><a href='add_dem'><h3>Теоретичний розрахунок ваги</h3></a></dt>
                    <dd>Внесення даних матеріалу (назва, одиниця виміру, вага за од. виміру)</dd>
                </dl>
                <dl>
                    <dt><a href='add_far'><h3>Розрахунок витрат порошкової фарби</h3></a></dt>
                    <dd>Внесення даних матеріалу (назва матеріалу для фарбування, площа перерізу для погонажних матеріалів в м.кв.)</dd>
                </dl>
                <dl>
                    <dt><a href='add_por'><h3>Розрахунок витрат поролону</h3></a></dt>
                    <dd>Внесення даних матеріалу (назва поролону, товщина поролону, щільність)</dd>
                </dl>
            </div>
            <div class="col-xs-12 col-md-4 col-lg-4"></div>
        </div>

    </div>
</div>




