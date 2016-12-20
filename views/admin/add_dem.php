<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<div class="level level-grey level-b-70">
    <div class="container">
<<<<<<< HEAD
        <h3 class="text-center">Добавити одиницю виміру</h3>
=======
        <h3 class="text-center">Добавить единицу измерения</h3>
>>>>>>> 19799189d71326cf704ffef5f1e77386baf3c7a5

        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="reg">

                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'name')->textInput() ?>

                <div class="center">
<<<<<<< HEAD
                    <?= Html::submitButton('Добавити', ['class' => 'btn btn-primary']) ?>
=======
                    <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary']) ?>
>>>>>>> 19799189d71326cf704ffef5f1e77386baf3c7a5
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>