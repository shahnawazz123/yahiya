<?php
namespace app\widgets;

use Yii;
use app\models\Banner;
use yii\bootstrap4\Carousel;
use yii\bootstrap4\CarouselItem;
use yii\helpers\Html;

/*
*   created by Shahnawaz Khan 
*   echo app\widgets\CarouselWidget::widget();
*/

class CarouselWidget extends Widget
{
    public function run(){
        $carouselItems = Banner::find()->orderBy('sequence_number')->all();
        $items = [];

        foreach ($carouselItems as $carouselItem) {
            $items[] = CarouselItem::widget([
                'options' => ['class' => 'carousel-item'],
                'caption' => Html::tag('h3', $carouselItem->title),
                'content' => Html::img($carouselItem->image_url, ['alt' => $carouselItem->title]),
            ]);
        }

        echo Carousel::widget([
            'items' => $items,
            'options' => ['class' => 'carousel slide', 'data-ride' => 'carousel'],
        ]);
    }
}
