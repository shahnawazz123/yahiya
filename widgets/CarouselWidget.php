<?php
namespace app\widgets;

use Yii;
use app\models\Banners;
use yii\bootstrap4\Carousel;
use yii\bootstrap4\CarouselItem;
use yii\helpers\Html;

/*
*   created by Shahnawaz Khan 
*   echo app\widgets\CarouselWidget::widget();
*/

class CarouselWidget extends \yii\bootstrap4\Widget
{
    public function run(){
        $carouselItems = Banners::find()->orderBy('sequence_number')->all();
        $items = [];

        foreach ($carouselItems as $carouselItem) {
            $items[] = [
                'content' => Html::img($carouselItem->image_url, ['class' => 'd-block w-100', 'alt' => 'First slide']),
                'caption' => Html::tag('h3', $carouselItem->title),
                'options' => ['class' => 'carousel-item'],
            ];
        }

        echo Carousel::widget([
            'id' => 'yahiyaFootwearBanner',
                    'options' => [
                        'class' => 'carousel slide',
                        'data-ride' => 'carousel',
                    ],
            'items' => $items,
            'controls' => [
                '<span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span>',
                '<span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span>',
            ],
        ]);       
    }
}
