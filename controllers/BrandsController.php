<?php

namespace app\controllers;
use yii;
use app\models\Brands;
use app\models\BrandsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use yii\widgets\ActiveForm;
/**
 * BrandsController implements the CRUD actions for Brands model.
 */
class BrandsController extends Controller
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
     * Lists all Brands models.
     *
     * @return string
     */
    
    public function actionIndex(){
        $searchModel = new BrandsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        $result = [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ];

        if (Yii::$app->request->isAjax) {
            return $this->renderPartial('_index',$result);
        }
        return $this->render('index',$result);
    }

    public function actionView($id)
    {
        return $this->renderPartial('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate(){
        $model = new Brands();

        if ($this->request->isAjax && $this->request->isPost) {
            if ($model->load($this->request->post()) && $model->validate()) {
                $model->save();
                Yii::$app->session->setFlash('popup-success', 'Brands saved successfully.');
                return $this->redirect(['index']);
            } else {
                $this->response->format = Response::FORMAT_JSON;
                return ActiveForm::validate($model);
                //$model->loadDefaultValues();
            }    
        }

        return $this->renderAjax('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id){
        $model = $this->findModel($id);

        if ($this->request->isAjax && $this->request->isPost) {
            if ($model->load($this->request->post()) && $model->validate()) {
                $model->save();
                Yii::$app->session->setFlash('popup-success', 'Brands update successfully.');
                return $this->redirect(['index']);
            } else {
                $this->response->format = Response::FORMAT_JSON;
                return ActiveForm::validate($model);
            }    
        }

        return $this->renderAjax('update', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id){
        $model      = $this->findModel($id);
        $message    = "{$model->name} Brands deleted successfully.";
        $model->delete();
        Yii::$app->session->setFlash('popup-success', $message);
        return $this->redirect(['index']);
    }

    /**
     * Finds the Brands model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Brands the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Brands::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
