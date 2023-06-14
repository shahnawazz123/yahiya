<?php

use yii\db\Migration;

/**
 * Class m200101_000010_insert_products_data
 */
class m200101_000010_insert_products_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // Inserting products data
        $this->batchInsert('products', ['name', 'price', 'brand_id', 'category_id', 'description'], [
            ['Bata Men\'s Leather Dress Shoes', 99.99, 1, 1, 'Classic leather dress shoes for men, perfect for formal occasions.'],
            ['Bata Women\'s Canvas Sneakers', 49.99, 1, 2, 'Casual canvas sneakers for women, great for everyday wear.'],
            ['Bata Kids\' School Uniform Shoes', 29.99, 1, 3, 'Durable and comfortable school shoes for kids.'],
            ['Liberty Men\'s Leather Formal Shoes', 79.99, 2, 1, 'Classic leather formal shoes for men, perfect for professional settings. Features a polished look and comfortable fit.'],
            ['Liberty Women\'s Sneakers', 59.99, 2, 2, 'Stylish sneakers for women, suitable for casual outings. Made with breathable materials and cushioned insoles.'],
            ['Liberty Kids\' School Shoes', 29.99, 2, 3, 'Durable and comfortable school shoes for kids, designed for everyday wear and active play.'],
            ['Liberty Men\'s Sports Shoes', 69.99, 2, 1, 'Performance-oriented sports shoes for men, providing excellent support and traction during athletic activities.'],
            ['Liberty Women\'s Sandals', 39.99, 2, 2, 'Trendy sandals for women, featuring adjustable straps and cushioned footbeds for all-day comfort.'],
            ['Liberty Men\'s Casual Loafers', 49.99, 2, 1, 'Comfortable loafers for men, suitable for casual occasions. Made with lightweight materials and slip-on design.'],
            ['Liberty Women\'s High Heel Pumps', 89.99, 2, 2, 'Elegant high heel pumps for women, perfect for formal events and special occasions. Offers style and comfort.'],
            ['Liberty Kids\' Sports Sneakers', 34.99, 2, 3, 'Sporty sneakers for kids, designed with supportive soles and breathable fabrics for active play and sports.'],
            ['Liberty Men\'s Leather Boots', 99.99, 2, 1, 'Stylish leather boots for men, suitable for both casual and rugged outdoor activities. Provides durability and style.'],
            ['Liberty Women\'s Ballet Flats', 44.99, 2, 2, 'Classic ballet flats for women, offering a comfortable and versatile option for everyday wear or dressier occasions.'],
            ["Woodland Men's Leather Outdoor Shoes",2500,3,1,"Sturdy and durable outdoor shoes made with genuine leather, perfect for rugged terrains and outdoor activities."
            ],
            ["Woodland Women's Hiking Boots",3500,3,2,"High-quality hiking boots designed to provide excellent support, traction, and comfort during outdoor adventures."
            ],
            ["Woodland Men's Casual Sneakers",2000,3,3,"Stylish and comfortable sneakers suitable for everyday casual wear, crafted with attention to detail and quality materials."
            ],
            ["Woodland Men's Leather Boots",6000,3,4,"Premium leather boots with a rugged design, offering durability, protection, and style for various outdoor activities."
            ],
            ["Woodland Women's Sandals",3000,3,5,"Comfortable and versatile sandals designed for women, providing a combination of style and functionality for warm-weather outings."
            ],
            ["Woodland Men's Formal Shoes",4000,3,6,"Elegant and sophisticated formal shoes crafted with precision and featuring premium materials, ideal for professional or formal occasions."
            ],
            ["Woodland Kids' Outdoor Shoes",2500,3,7,"Durable and reliable outdoor shoes for kids, designed to withstand active play and provide comfort and protection."
            ],
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // Delete the inserted data
        $this->delete('products', []);

        return true;
    }
}
