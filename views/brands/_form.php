<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
/** @author Shahnawaz Khan */
/** @var app\models\Brands $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="brands-form container-fluid">
	<div class="row clearfix">
        <div class="col-lg-12 col-md-12">
		    <?php $form = ActiveForm::begin(); ?>
		    	<div class = "card">
		    		<div class = "header">
		    			<h2 class="text-capitalize">brands Form</h2>
		    		</div>
		    		<div class = "body">
		    			<?= $form->field($model, 'name')->textInput(['maxlength' => true])?>

<?= $form->field($model, 'description')->textarea(['rows' => 6])?>

					</div>
				</div>	
				<div class="form-group">
			        <?= Html::submitButton('Save', ['class' => 'btn btn-sm btn-success btn-round']) ?>
			    </div>
			<?php ActiveForm::end(); ?>	
		</div>	
	</div>
</div>