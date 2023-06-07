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
    public function up()
    {
        $this->createTable('{{%categories}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'description' => $this->text(),
        ]);
        
        $this->batchInsert('{{%categories}}', ['name', 'description'], [

            ['Sneakers', 'Casual athletic shoes designed for comfort and versatility.'],

            ['Boots', 'Footwear made of leather or synthetic materials, covering the foot and ankle or extending higher up the leg.'],

            ['Sandals', 'Open-toe footwear with straps or a sole held to the foot using different fastening methods.'],

            ['Flats', 'Low-heeled shoes that lack a significant arch, known for their comfort and ease of wearing.'],

            ['High Heels', 'Women\'s shoes with raised heels of varying heights, commonly worn for formal events or to enhance a fashionable look.'],

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->delete('{{%categories}}');
        $this->dropTable('{{%categories}}');
    }
}
