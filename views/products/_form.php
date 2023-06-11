<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
/** @author Shahnawaz Khan */
/** @var app\models\Products $model */
/** @var yii\widgets\ActiveForm $form */
app\assets\DropifyAsset::register($this);
?>

<div class="products-form">
	<div class="row clearfix">
        <div class="col-lg-12 col-md-12">
		    <?php $form = ActiveForm::begin([
		    	'action' => [$model->isNewRecord ? 'create' : "update?id={$model->id}"],
			    'id' => 'products-form',
			    // 'enableAjaxValidation' => true, // Enable AJAX validation
			    'options' => ['enctype' => 'multipart/form-data']
		    ]); ?>
		    	<div class = "card">
		    		<div class = "header">
		    			<h2 class="text-capitalize">products Form</h2>
		    		</div>
		    		<div class="body">
		    			<?= $form->field($model, 'name')->textInput()?>
						<?= $form->field($model, 'description')->textarea(['rows' => 3])?>
						<?= $form->field($model, 'image_url')->fileInput(['class' => 'custom-dropify-upload','data-height' => '100', 'data-default-file' => \Yii::getAlias('@webroot').$model->image_url]); ?>
						
						<div class="d-flex justify-content-between flex-wrap">
                    		<?= $form->field($model, 'category_id',['options' => ['class' => 'ml-4']])->dropDownList($model->allCategories, ['prompt' => 'Select a category']);?>

                    		<?= $form->field($model, 'brand_id',['options' => ['class' => 'ml-4']])->dropDownList($model->allBrands,  ['prompt' => 'Select a brand']); ?>
                    		
                    		<?= $form->field($model, 'price')->input('number', ['min' => 0, 'max' => 100, 'step' => 1]);?>
							
							<?= $form->field($model, 'quantity')->input('number', ['min' => 0, 'max' => 100, 'step' => 1]);?>
						</div>	
					</div>
				</div>	
				<div class="form-group">
			        <?= Html::submitButton($model->isNewRecord ? 'Save' : 'Update', ['class' => 'btn btn-sm btn-success btn-round']) ?>
			    </div>
			<?php ActiveForm::end(); ?>	
		</div>	
	</div>
</div>
<!-- JavaScript code to handle AJAX form submission -->
<script>
$(document).on('click', 'button.btn-sm', function(event) {
    event.preventDefault();

    var form = $(this).parents('form');
    var formData = new FormData(form[0]);

    $.ajax({
        url: form.attr('action'),
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            
            form.find('.help-block').remove();
            form.find('.has-error').removeClass('has-error');
            
            // Iterate through the error messages and update the form fields
            $.each(response.errors, function(field, messages) {
                var input = form.find('.field-products-' + field);
                var errorContainer = $('<div class="help-block"></div>');
                
                // Add error class to the form field container
                input.closest('.form-group').addClass('has-error');
                
                // Add error messages to the error container
                $.each(messages, function(index, message) {
                    errorContainer.append($('<p></p>').text(message));
                });
                
                // Insert the error container after the form field
                input.after(errorContainer);
            });
        },
        error: function(jqXHR, textStatus, errorThrown) {
            // Handle error response
            console.log(textStatus, errorThrown);
        }
    });
});
</script>
