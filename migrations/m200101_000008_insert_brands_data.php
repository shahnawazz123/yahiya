<?php

use yii\db\Migration;

class m200101_000008_insert_brands_data extends Migration {

    public function safeUp(){

        $this->batchInsert('brands', ['name', 'description'], [

            ['Bata', 'Bata is a well-known Indian footwear brand with a wide range of shoes for all ages.'],

            ['Liberty Shoes', 'Liberty Shoes offers a diverse range of footwear options, including formal shoes, casual shoes, and boots.'],

            ['Woodland', 'Woodland specializes in outdoor and adventure footwear, ideal for hiking and trekking enthusiasts.'],

            ['Khadim\'s', 'Khadim\'s offers affordable and trendy footwear for both men and women, including formal shoes, casual shoes, and flip-flops.'],

            ['Metro Shoes', 'Metro Shoes is known for its stylish designs and quality craftsmanship, offering a wide range of footwear for men, women, and children.'],

        ]);

    }

    public function safeDown(){
        $this->delete('brands');
    }

}


