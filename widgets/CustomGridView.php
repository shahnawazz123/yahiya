<?php

namespace app\widgets;

use yii\grid\GridView;

/* 
*    In the above code, we add {filters} to the layout to include the custom rendering of the filter row. 
*    We also set the filterSelector property to match the custom filter inputs placed outside the table. 
*    Example:
*    app\widgets\CustomGridView::widget([
*    'dataProvider' => $dataProvider,
*    'filterModel' => $searchModel,
*    'columns' => [
*        // Define your columns here
*    ],
*    'layout' => "{filter}\n{summary}\n{items}\n{pager}", // Add "{filters}" to the layout
*    'filterSelector' => '#custom-filters input', // Set the filter selector to match the custom filter inputs
*    'tableOptions' => ['class' => 'table table-striped'], // Optional: Add custom table class
*    'filterRowOptions' => ['id' => 'custom-filters'], // Optional: Add custom filter row ID
*/

class CustomGridView extends GridView{
    
    public function init(){
        parent::init();
        
        // Custom initialization code here
        // Example: Set default values for properties
        $this->options = array_merge(['class' => 'custom-grid-view'], $this->options);
        $this->tableOptions = array_merge(['class' => 'custom-table'], $this->tableOptions);
        $this->summaryOptions = array_merge(['class' => 'custom-summary'], $this->summaryOptions);
    }
    
    public function run(){
        // Custom rendering code here
        
        // Example: Wrap the grid view with a custom container
        echo '<div class="custom-container">';
        parent::run();
        echo '</div>';
    }

    // public function renderTableHeader(){
    //     // Render only the table header
    //     return $this->renderSection('table_header');
    // }

    /*public function renderFilters(){
        // Render only the filter row
        //return $this->renderSection('filter');
        $model = $this->filterModel;
        $content = '';

        foreach ($this->columns as $column) {
            if (!$column->filter) {
                continue;
            }

            $content .= $column->renderFilterCellContent($model);
        }

        return $content;
    
    }*/

    /*public function renderSection($name){
        switch ($name) {
            case 'table_header':
                return parent::renderTableHeader();
            case 'filter':
                return $this->renderFilterRow();
            default:
                return '';
        }
    }*/
}
