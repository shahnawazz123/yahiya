<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%reviews}}`.
 */
class m200101_000006_create_reviews_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
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

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropForeignKey('fk_reviews_user', '{{%reviews}}');
        $this->dropForeignKey('fk_reviews_product', '{{%reviews}}');
        $this->dropTable('{{%reviews}}');
    }
}
