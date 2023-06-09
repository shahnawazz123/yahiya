<?php

namespace app\controllers;

use yii;
use app\models\Categories;
use app\models\CategoriesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
/**
 * CategoriesController implements the CRUD actions for Categories model.
 */
class CategoriesController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Categories models.
     *
     * @return string
     */
    public function actionIndex(){
        $searchModel = new CategoriesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        if (Yii::$app->request->isAjax && Yii::$app->request->isPjax) {
            return $this->renderPartial('_index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        }

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

    }

    public function actionView($id){
        return $this->renderPartial('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate(){
        $model = new Categories();

        if ($this->request->isPost && Yii::$app->request->isAjax) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['index']);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->renderPartial('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id){
        $model = $this->findModel($id);

        if ($this->request->isPost  && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        return $this->renderPartial('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Categories model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    // public function actionCreate(){
    //     $model = new Categories();

    //     if ($model->load(Yii::$app->request->post()) && $model->save()) {
    //         Yii::$app->response->format = Response::FORMAT_JSON;
    //         return ['success' => true];
    //     } else {
    //         Yii::$app->response->format = Response::FORMAT_JSON;
    //         return ['success' => false, 'errors' => $model->errors];
    //     }
    // }

    // public function actionUpdate($id){
    //     $model = $this->findModel($id);

    //     if ($model->load(Yii::$app->request->post()) && $model->save()) {
    //         Yii::$app->response->format = Response::FORMAT_JSON;
    //         return ['success' => true];
    //     } else {
    //         Yii::$app->response->format = Response::FORMAT_JSON;
    //         return ['success' => false, 'errors' => $model->errors];
    //     }
    // }

    // public function actionDelete($id){
    //     $this->findModel($id)->delete();

    //     Yii::$app->response->format = Response::FORMAT_JSON;
    //     return ['success' => true];
    // }


    /**
     * Finds the Categories model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Categories the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Categories::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
