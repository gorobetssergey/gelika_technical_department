<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form ActiveForm */
?>

<div class="level level-grey level-b-70">
    <div class="container">
        <h3 class="text-center">Регистрация</h3>

        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="reg">

                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'email')->textInput() ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'repet_password')->passwordInput() ?>

                <div class="center">
                    <?= Html::submitButton('Регистрация', ['class' => 'btn btn-primary']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>