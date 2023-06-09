<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/** @author Shahnawaz Khan */
/** @var app\models\Categories $model */
/** @var yii\widgets\ActiveForm $form */

?>

<div class="categories-form">
	<div class="row clearfix">
        <div class="col-lg-12 col-md-12">
		    <?php $form = ActiveForm::begin([
		    	'action' => [$model->isNewRecord ? 'create' : "update?id={$model->id}"],
			    'id' => 'category-form',
			    'enableAjaxValidation' => true, // Enable AJAX validation
			]); ?>

		    	<div class="card">
		    		<div class="header">
		    			<h2 class="text-capitalize">categories Form</h2>
		    		</div>
		    		<div class="body">
		    			<?= $form->field($model, 'name')->textInput(['maxlength' => true])?>
						<?= $form->field($model, 'description')->textarea(['rows' => 6])?>
					</div>
				</div>	
				<div class="form-group">
			        <?= Html::submitButton($model->isNewRecord ?'Save' : 'Update', ['class' => 'btn btn-sm btn-success btn-round']) ?>
			    </div>
			<?php ActiveForm::end(); ?>	
		</div>	
	</div>
</div>