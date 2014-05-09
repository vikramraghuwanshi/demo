<?php

namespace app\controllers;

use Yii;
use app\models\ebooks;
use app\models\derived\Ebook;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EbookController implements the CRUD actions for ebooks model.
 */
class EbookController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all ebooks models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Ebook;
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }

    /**
     * Displays a single ebooks model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ebooks model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ebooks;

        if ($model->load(Yii::$app->request->post())) {
            $unique_id =time();
            
            if($model->save()){
                if(isset($_FILES['ebooks']['name']['cover_pages']) and $_FILES['ebooks']['name']['cover_pages'] !=''){
                    $cover_pagespath = dirname(__DIR__).'/web/cover_pages/';
                    $cover_pagesname = \yii\web\UploadedFile::getInstance($model, 'cover_pages');
                    $model->cover_pages = $unique_id.'_'.$cover_pagesname->name;
                    $cover_pagesname->saveAs($cover_pagespath.$unique_id.'_'.$cover_pagesname->name);
                    $model->save();
                }
                if(isset($_FILES['ebooks']['name']['file_location']) and $_FILES['ebooks']['name']['file_location'] != ''){
                    $ebookpath = dirname(__DIR__).'/web/ebooks/';
                    $ebookname = \yii\web\UploadedFile::getInstance($model, 'file_location');
                    $model->file_location = $unique_id.'_'.$ebookname->name;
                    $ebookname->saveAs($ebookpath.$unique_id.'_'.$ebookname->name);
                    $model->save();
                }
                //pr($_FILES,2);
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ebooks model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ebooks model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ebooks model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ebooks the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ebooks::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
