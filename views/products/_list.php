<?php
use yii\helpers\Html;

/* @var $records app\models\Record[] */

foreach ($records as $record) {
    echo '<div class="record">';
    echo '<h2>' . Html::encode($record->title) . '</h2>';
    echo '<p>' . Html::encode($record->description) . '</p>';
    // Display other record details here
    echo '</div>';
}
?>
