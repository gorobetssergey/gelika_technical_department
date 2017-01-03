<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$this->title = 'Розрахунок поролону';
?>
<div class="container-fluid">
	<div class="row">
		<div class="row">
			<div class="col-xs-12 col-md-3 col-lg-3">


			</div>
			<div class="col-xs-12 col-md-6 col-lg-6">
				<div class="reg">
					<h3 class="text-center"><strong>Введіть необхідні параметри для розрахунку поролону</strong></h3>
					<?php $form = ActiveForm::begin(); ?>
					<?= $form->field($model, 'name_mat')->textInput() ?>
					<?= $form->field($model, 'height')->dropDownList([
						'10' => '10',
						'20' => '20',
						'30'=>'30',
						'40'=>'40',
						'50'=>'50',
						'60'=>'60',]) ?>
					<?= $form->field($model, 'destiny')->textInput() ?>
					<div class="center">
						<?= Html::submitButton('Додати в базу', ['class' => 'btn btn-success btn-lg']) ?>
					</div>
					<?php ActiveForm::end(); ?>
				</div>
				<br>
				<a href="index" button type="button" class="btn btn-danger btn-lg">Повернутися назад</a>
			</div>
			<div class="col-xs-12 col-md-3 col-lg-3"></div>
		</div>

	</div>
</div>

