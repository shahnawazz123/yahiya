<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class ErrorHandlingController extends Controller
{
    public function actionError()
    {
        $exception = Yii::$app->errorHandler->exception;
        if ($exception !== null) {
            return $this->render('error', ['exception' => $exception]);
        }
    }
}
