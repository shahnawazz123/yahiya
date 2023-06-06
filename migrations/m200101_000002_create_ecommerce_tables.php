<?php
use yii\db\Migration;

class m200101_000002_create_ecommerce_tables extends Migration
{
    public function up()
    {
        // Create categories table
        $this->createTable('{{%categories}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'description' => $this->text(),
        ]);

        // Create orders table
        $this->createTable('{{%orders}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'order_date' => $this->dateTime(),
            'total_amount' => $this->decimal(10, 2)->notNull(),
            'status' => $this->string()->notNull(),
        ]);

        // Add foreign key constraint for orders table
        $this->addForeignKey('fk_orders_user', '{{%orders}}', 'user_id', '{{%users}}', 'id', 'CASCADE', 'CASCADE');

        // Create order_items table
        $this->createTable('{{%order_items}}', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer()->notNull(),
            'product_id' => $this->integer()->notNull(),
            'quantity' => $this->integer()->notNull(),
            'unit_price' => $this->decimal(10, 2)->notNull(),
        ]);

        // Add foreign key constraints for order_items table
        $this->addForeignKey('fk_order_items_order', '{{%order_items}}', 'order_id', '{{%orders}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_order_items_product', '{{%order_items}}', 'product_id', '{{%products}}', 'id', 'CASCADE', 'CASCADE');

        // Create reviews table
        $this->createTable('{{%reviews}}', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull(),
            'rating' => $this->integer()->notNull(),
            'comment' => $this->text(),
        ]);

        // Add foreign key constraints for reviews table
        $this->addForeignKey('fk_reviews_product', '{{%reviews}}', 'product_id', '{{%products}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_reviews_user', '{{%reviews}}', 'user_id', '{{%users}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        // Drop foreign key constraints first
        $this->dropForeignKey('fk_reviews_user', '{{%reviews}}');
        $this->dropForeignKey('fk_reviews_product', '{{%reviews}}');
        $this->dropForeignKey('fk_order_items_product', '{{%order_items}}');
        $this->dropForeignKey('fk_order_items_order', '{{%order_items}}');
        $this->dropForeignKey('fk_orders_user', '{{%orders}}');

        // Drop tables
        $this->dropTable('{{%reviews}}');
        $this->dropTable('{{%order_items}}');
        $this->dropTable('{{%orders}}');
        $this->dropTable('{{%categories}}');
    }
}
