<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<div class="level level-grey level-b-70">
	<div class="container">
		<h3 class="text-center">Додати одиницю виміру</h3>

		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="reg">

				<?php $form = ActiveForm::begin(); ?>

				<?= $form->field($model, 'name_mat')->textInput() ?>
				<div class="center">
					<?= Html::submitButton('Додати', ['class' => 'btn btn-primary']) ?>
				</div>

				<?php ActiveForm::end(); ?>
			</div>
		</div>
	</div>
</div>
