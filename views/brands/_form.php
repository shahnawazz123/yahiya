<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use app\widgets\SummernoteWidget;
/** @author Shahnawaz Khan */
/** @var app\models\Brands $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="brands-form container-fluid">
	<div class="row clearfix">
        <div class="col-lg-12 col-md-12">
		    <?php $form = ActiveForm::begin([
		    	'action' => [$model->isNewRecord ? 'create' : "update?id={$model->id}"],
			    'id' => 'brands-form',
			    'enableAjaxValidation' => true, // Enable AJAX validation
		    ]); ?>
		    	<div class="card">
		    		<div class="header">
		    			<h2 class="text-capitalize">brands Form</h2>
		    		</div>
		    		<div class="body">
		    			<?= $form->field($model, 'name')->textInput(['maxlength' => true])?>
						<?= $form->field($model, 'description')->widget(SummernoteWidget::class, [
							    'options' => [
							        'rows' => 6,
							    ],
							    'clientOptions' => [
							        // CKEditor client options
							        //'language' => 'en',
							    ],
						])?>

					</div>
				</div>	
				<div class="form-group">
			        <?= Html::submitButton($model->isNewRecord ? 'Save' : 'Update', ['class' => 'btn btn-sm btn-success btn-round']) ?>
			    </div>
			<?php ActiveForm::end(); ?>	
		</div>	
	</div>
</div>