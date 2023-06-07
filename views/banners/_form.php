<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Banners $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="banners-form container-fluid">
    <div class="row clearfix">
    	<div class="col-lg-12 col-md-12">
			<?php
				$form = ActiveForm::begin();

				echo Html::beginTag('div', ['class' => 'card']);
				    echo Html::tag('div', '<h2>Banner Form</h2>', ['class' => 'header']);
				    echo Html::beginTag('div', ['class' => 'body']);
				        echo $form->field($model, 'title')->textInput(['maxlength' => true]);
				        echo $form->field($model, 'image_url')->textInput(['maxlength' => true]);
				        echo $form->field($model, 'link')->textInput([['maxlength' => true]]);    
					echo Html::endTag('div');
				echo Html::endTag('div');
				
				echo Html::beginTag('div', ['class' => 'form-group']);
		        	echo Html::submitButton('Save', ['class' => 'btn btn-success']);
		        echo Html::endTag('div');
		    
				ActiveForm::end();
			?>
		</div>
	</div>
</div>
