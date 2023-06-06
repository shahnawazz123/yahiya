<?php
use yii\db\Migration;

class m200101_000001_create_products_table extends Migration
{
    public function up()
    {
        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'description' => $this->text(),
            'price' => $this->decimal(10, 2)->notNull(),
            'image_url' => $this->string(),
            // Add other product-related attributes here
            'category_id' => $this->integer(),
            'brand_id' => $this->integer(),
            'quantity' => $this->integer(),
        ]);

        // Add foreign key constraints
        $this->addForeignKey('fk_products_category', '{{%products}}', 'category_id', '{{%categories}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_products_brand', '{{%products}}', 'brand_id', '{{%brands}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        // Drop foreign key constraints first
        $this->dropForeignKey('fk_products_brand', '{{%products}}');
        $this->dropForeignKey('fk_products_category', '{{%products}}');

        $this->dropTable('{{%products}}');
    }
}
