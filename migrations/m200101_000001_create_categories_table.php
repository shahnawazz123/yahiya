<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%categories}}`.
 */
class m200101_000001_create_categories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up(){
        $this->createTable('{{%categories}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'description' => $this->text(),
        ]);
        
    }

    public function down(){  
        $this->dropTable('{{%categories}}');
    }
}
