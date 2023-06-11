<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "banners".
 *
 * @property int $id
 * @property string $title
 * @property string $image_url
 * @property string $link
 * @property int $sequence_number
 * @property string $created_at
 * @property string $updated_at
 */
class Banners extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'banners';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'image_url', 'link', 'sequence_number', 'created_at', 'updated_at'], 'required'],
            [['sequence_number'], 'integer'],
            [['sequence_number'], 'unique'],
            [['created_at', 'updated_at'], 'safe'],
            [['title','link'], 'string', 'max' => 255],
            [['image_url'], 'file', 'extensions' => ['png', 'jpg'], 'maxSize' => 5*1024*1024],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'image_url' => 'Image/Url',
            'link' => 'Link',
            'sequence_number' => 'Sequence Number',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
