<?php

use yii\db\Migration;

/**
 * Handles the creation of table `banners`.
 */
class m200101_000007_create_banners_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('banners', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'image_url' => $this->string()->notNull(),
            'link' => $this->string()->notNull(),
            'sequence_number' => $this->integer()->notNull(),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('banners');
    }
}
