<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
/** @author Shahnawaz Khan */
/** @var app\models\Banners $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="banners-form">
	<div class="row clearfix">
        <div class="col-lg-12 col-md-12">
		    <?php $form = ActiveForm::begin([
		    	'action' => [$model->isNewRecord ? 'create' : 'update'],
			    // 'id' => 'banners-form',
			    // 'enableAjaxValidation' => true, // Enable AJAX validation
		    ]); ?>
		    	<div class = "card">
		    		<div class = "header">
		    			<h2 class="text-capitalize">banners Form</h2>
		    		</div>
		    		<div class = "body">
		    			<?= $form->field($model, 'title')->textInput(['maxlength' => true])?>

						<?= $form->field($model, 'image_url')->textInput(['maxlength' => true])?>

						<?= $form->field($model, 'link')->textInput(['maxlength' => true])?>

						<?= $form->field($model, 'sequence_number')->textInput()?>

					</div>
				</div>	
				<div class="form-group">
			        <?= Html::submitButton($model->isNewRecord ? 'Save' : 'Update', ['class' => 'btn btn-sm btn-success btn-round']) ?>
			    </div>
			<?php ActiveForm::end(); ?>	
		</div>	
	</div>
</div>