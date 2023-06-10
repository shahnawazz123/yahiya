<?php

namespace app\models;

use Yii;
use app\models\Brands;
use app\models\Categories;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property float $price
 * @property string|null $image_url
 * @property int|null $category_id
 * @property int|null $brand_id
 * @property int|null $quantity
 *
 * @property Brands $brand
 * @property Categories $category
 * @property OrderItems[] $orderItems
 * @property Reviews[] $reviews
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price'], 'required'],
            [['description'], 'string'],
            [['price'], 'number'],
            [['category_id', 'brand_id', 'quantity'], 'integer'],
            [['name', 'image_url'], 'string', 'max' => 255],
            [['brand_id'], 'exist', 'skipOnError' => true, 'targetClass' => Brands::class, 'targetAttribute' => ['brand_id' => 'id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::class, 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'price' => 'Price',
            'image_url' => 'Image Url',
            'category_id' => 'Category ID',
            'brand_id' => 'Brand ID',
            'quantity' => 'Quantity',
        ];
    }

    public function getBrand()
    {
        return $this->hasOne(Brands::class, ['id' => 'brand_id']);
    }

    public function getAllBrands(){
        return ArrayHelper::map(Brands::find()->all(), 'id', 'name');
    }

    public function getCategory()
    {
        return $this->hasOne(Categories::class, ['id' => 'category_id']);
    }

    public function getAllCategories(){
        return ArrayHelper::map(Categories::find()->all(), 'id', 'name');
    }

    public function getOrderItems()
    {
        return $this->hasMany(OrderItems::class, ['product_id' => 'id']);
    }

    public function getReviews()
    {
        return $this->hasMany(Reviews::class, ['product_id' => 'id']);
    }
}
