<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/** @var yii\web\View $this */
/** @var yii\gii\generators\crud\Generator $generator */

/* @var $model \yii\db\ActiveRecord */
$model = new $generator->modelClass();
$safeAttributes = $model->safeAttributes();
if (empty($safeAttributes)) {
    $safeAttributes = $model->attributes();
}

echo "<?php\n";
?>

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
/** @author Shahnawaz Khan */
/** @var <?= ltrim($generator->modelClass, '\\') ?> $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-form">
	<div class="row clearfix">
        <div class="col-lg-12 col-md-12">
		    <?= "<?php " ?>$form = ActiveForm::begin([
		    	'action' => [$model->isNewRecord ? 'create' : 'update'],
			    // 'id' => '<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-form',
			    // 'enableAjaxValidation' => true, // Enable AJAX validation
		    ]); ?>
		    	<div class = "card">
		    		<div class = "header">
		    			<h2 class="text-capitalize"><?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?> Form</h2>
		    		</div>
		    		<div class = "body">
		    			<?php
							foreach ($generator->getColumnNames() as $attribute) {
							  if (in_array($attribute, $safeAttributes)) {
							    echo "<?= " .$generator->generateActiveField($attribute)."?>\n\n";
							   }
							} 
							   
						?>
					</div>
				</div>	
				<div class="form-group">
			        <?= "<?= " ?>Html::submitButton($model->isNewRecord ? 'Save' : 'Update'), ['class' => 'btn btn-sm btn-success btn-round']) ?>
			    </div>
			<?= "<?php " ?>ActiveForm::end(); ?>	
		</div>	
	</div>
</div>