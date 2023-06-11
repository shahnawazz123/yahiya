<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
\app\assets\DropifyAsset::register($this);

/** @author Shahnawaz Khan */
/** @var app\models\Banners $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="banners-form">
	<div class="row clearfix">
        <div class="col-lg-12 col-md-12">
		    <?php $form = ActiveForm::begin([
		    	'action' => [$model->isNewRecord ? 'create' : 'update'],
			    'id' => 'banners-form',
			    //'enableAjaxValidation' => true, // Enable AJAX validation
			    'options' => ['enctype' => 'multipart/form-data']
		    ]); ?>
		    	<div class="card">
		    		<div class="header">
		    			<h2 class="text-capitalize">banners Form</h2>
		    		</div>
		    		<div class="body">
		    			<?= $form->field($model, 'title')->textInput(['maxlength' => true])?>
		    			
		    			<?= $form->field($model, 'image_url')->fileInput(['class' => 'custom-dropify-upload','data-height' => '100', 'data-default-message' => 'Drag & Drop']); ?>
		    			 
						<div class="d-flex">
						<?= $form->field($model, 'link',['options' => ['class' => 'mr-4']])->textInput(['maxlength' => true])?>

						<?= $form->field($model, 'sequence_number',['options' => ['class' => 'mr-4']])->textInput()?>
						</div>
					</div>
				</div>	
				<div class="form-group">
			        <?= Html::button($model->isNewRecord ? 'Save' : 'Update', ['class' => 'btn btn-sm btn-success btn-round']) ?>
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
                const input = form.find('#banners-' + field);
                const errorContainer = $('<div class="help-block"></div>');
                
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
