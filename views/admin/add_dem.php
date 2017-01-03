<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$this->title = 'Розрахунок ваги';
?>
<div class="container-fluid">
	<div class="row">
		<div class="row">
			<div class="col-xs-12 col-md-3 col-lg-3">


			</div>
			<div class="col-xs-12 col-md-6 col-lg-6">
				<div class="reg">
					<h3 class="text-center"><strong>Введіть дані матеріалу для попереднього розрахунку ваги</strong></h3>
					<?php $form = ActiveForm::begin(); ?>
					<?= $form->field($model, 'name_mat')->textInput() ?>
					<?= $form->field($model, 'name_dem')->dropDownList([
						'кг' => 'кг',
						'м.кв' => 'м.кв',
						'м.куб'=>'м.куб',
						'м/п'=>'м/п']) ?>
					<div class="center">
					<?= $form->field($model, 'weight')->textInput() ?>
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

