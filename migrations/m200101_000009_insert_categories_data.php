<?php

use yii\db\Migration;

class m200101_000009_insert_categories_data extends Migration {

    public function safeUp(){

        $this->batchInsert('{{%categories}}', ['name', 'description'], [

            ['Sneakers', 'Casual athletic shoes designed for comfort and versatility.'],

            ['Boots', 'Footwear made of leather or synthetic materials, covering the foot and ankle or extending higher up the leg.'],

            ['Sandals', 'Open-toe footwear with straps or a sole held to the foot using different fastening methods.'],

            ['Flats', 'Low-heeled shoes that lack a significant arch, known for their comfort and ease of wearing.'],

            ['High Heels', 'Women\'s shoes with raised heels of varying heights, commonly worn for formal events or to enhance a fashionable look.'],

        ]);

    }

    public function safeDown(){
        $this->delete('{{%categories}}');
    }

}


