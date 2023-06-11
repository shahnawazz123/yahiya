<?php

namespace app\controllers;

use yii;
use app\models\Banners;
use app\models\BannersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\widgets\ActiveForm;
use yii\web\Response;
/**
 * BannersController implements the CRUD actions for Banners model.
 */
class BannersController extends Controller
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
                        'delete' => ['GET'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Banners models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BannersSearch();
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

    /**
     * Displays a single Banners model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->renderPartial('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Banners model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */

    public function actionCreate(){
        $model = new Banners();
        $model->updated_at = $model->created_at = date('Y-m-d h:i:s');

        if (Yii::$app->request->isAjax) {
            if (Yii::$app->request->isPost && $model->load($this->request->post())) {
                $model->image_url = UploadedFile::getInstance($model, 'image_url');

                if (!empty($model->image_url)) {
                    $basePath = Yii::getAlias('@webroot');
                    $filepath = '/images/banners/' . $model->image_url->baseName . '.' . $model->image_url->extension;

                    if ($model->image_url->saveAs($basePath . $filepath)) {
                        $model->image_url = $filepath;
                    }
                }

                if ($model->validate() && $model->save()) {
                    Yii::$app->session->setFlash('success', 'Banner successfully uploaded.');
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
    }


    /**
     * Updates an existing Banners model.
     * If update is successful, the browser will be reload to the 'index' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->updated_at = date('Y-m-d h:i:s');
        
        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['index', 'id' => $model->id]);
        }

        return $this->renderPartial('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Banners model.
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

    /**
     * Finds the Banners model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Banners the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Banners::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
