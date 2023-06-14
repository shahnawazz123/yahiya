<?php
use yii\db\Migration;

class m200101_000011_create_product_details_table extends Migration{
    
    public function up(){
        $this->createTable('{{%product_details}}', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer()->notNull(),
            'image' => $this->string(),
            //'price' => $this->decimal(10, 2)->notNull(),
            // Add any other columns for the product details table
        ]);

        $this->addForeignKey('fk-product_details-product_id', '{{%product_details}}', 'product_id', '{{%products}}', 'id', 'CASCADE');
    }

    public function down(){
        $this->dropForeignKey('fk-product_details-product_id', '{{%product_details}}');
        $this->dropTable('{{%product_details}}');
    }
}
