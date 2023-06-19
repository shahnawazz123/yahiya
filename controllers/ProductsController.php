<?php

namespace app\controllers;

use yii;
use app\models\Products;
use app\models\ProductsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\web\Response;
use yii\widgets\ActiveForm;
/**
 * ProductsController implements the CRUD actions for Products model.
 */
class ProductsController extends Controller
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
     * Lists all Products models.
     *
     * @return string
     */
    public function actionIndex(){
        $searchModel = new ProductsSearch();
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

    public function actionView($id){
        return $this->renderAjax('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate()
    {
        $model = new Products();

        if (Yii::$app->request->isAjax) {
            if (Yii::$app->request->isPost && $model->load($this->request->post())) {
                $model->image_url = UploadedFile::getInstance($model, 'image_url');

                if (!empty($model->image_url)) {
                    $basePath = Yii::getAlias('@webroot');
                    $filepath = '/images/products/' . $model->image_url->baseName . '.' . $model->image_url->extension;

                    if ($model->image_url->saveAs($basePath . $filepath)) {
                        $model->image_url = $filepath;
                    }
                }

                if ($model->validate() && $model->save()) {
                    Yii::$app->session->setFlash('popup-success', 'Banner successfully uploaded.');
                    return $this->redirect(['index']);
                } else {
                    Yii::$app->response->format = Response::FORMAT_JSON;
                    return ['errors' => $model->errors];
                }
            }
            return $this->renderAjax('create', ['model' => $model]);
        }else{
            return $this->redirect(['index']);
        }

        return $this->renderAjax('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Products model.
     * If update is successful, the browser will be reload to the 'index' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $model->setScenario('update');

        if (Yii::$app->request->isAjax) {
            if (Yii::$app->request->isPost && $model->load($this->request->post())) {
                $model->image_url = UploadedFile::getInstance($model, 'image_url');

                if (!empty($model->image_url)) {
                    $basePath = Yii::getAlias('@webroot');
                    $filepath = '/images/products/' . $model->image_url->baseName . '.' . $model->image_url->extension;

                    if ($model->image_url->saveAs($basePath . $filepath)) {
                        $model->image_url = $filepath;
                    }
                }else{
                    unset($model->image_url);
                }

                if ($model->validate() && $model->save()) {
                    Yii::$app->session->setFlash('popup-success', 'Products successfully updated.');
                    return $this->redirect(['index']);
                } else {
                    Yii::$app->response->format = Response::FORMAT_JSON;
                    return ['errors' => $model->errors];
                }
            }
            return $this->renderAjax('update', ['model' => $model]);
        }else{
            return $this->redirect(['index']);
        }
    }

    public function actionDelete($id){
        $model      = $this->findModel($id);
        $message    = "{$model->name} Brands deleted successfully.";
        $model->delete();
        Yii::$app->session->setFlash('popup-success', $message);

        return $this->redirect(['index']);
    }

    public function actionList($offset = 0){
        $limit = 9;
        
        // Fetch the next 9 records using the offset and limit
        $dataProvider = new \yii\data\ActiveDataProvider([
            'query' => Products::find()->offset($offset)->limit($limit),
            'pagination' => false,
        ]);

        if (Yii::$app->request->isAjax) {
            return $this->renderPartial('_list', ['dataProvider' => $dataProvider]);
        }
        return $this->render('list', ['dataProvider' => $dataProvider]);
    }

    public function actionDetail($id){
        $model = $this->findModel($id);

        return $this->render('detail', [
            'model' => $model,
            
        ]);
    }

    /**
     * Finds the Products model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Products the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Products::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
