<?php

namespace app\controllers;

use Yii;
use app\models\Kamar;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;
/**
 * KamarController implements the CRUD actions for Kamar model.
 */
class KamarController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index','about','view','update','delete'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],

                    // ...
                ],
            ],
        ];
    }

    /**
     * Lists all Kamar models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Kamar::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Kamar model.
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
     * Creates a new Kamar model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($idPenginapan, $idUser)
    {
        $model = new Kamar();

        if ($model->load(Yii::$app->request->post()) ) {
            $model->id_penginapan = $idPenginapan;
            $files = UploadedFile::getInstances($model, 'file');
            // print_r($files);
            $timeFile = strtotime("now");

            $n = 0;
            foreach ($files as $key => $value) {
                $basePath = str_replace(DIRECTORY_SEPARATOR.'protected', "", str_replace('backend', '', Yii::$app->basePath));
                $uploadDir = '/web/uploads/kamar/'; 
                $namaFile = 'kamar'.'-'.$timeFile . ' - '. $n;
                echo $value->saveAs($basePath .$uploadDir. $namaFile . '.' . $value->extension);//Upload files to 
                $model->foto .= $namaFile . '.' . $value->extension.'**';
                $n++;
            }
            echo $model->save();
            return $this->redirect(['/penginapan/view', 'idUser' => $idUser]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Kamar model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            
            $files = UploadedFile::getInstances($model, 'file');

            if (count($files) > 0) {
                $model->foto = '';
                $timeFile = strtotime("now");

                $n = 0;
                foreach ($files as $key => $value) {
                    $basePath = str_replace(DIRECTORY_SEPARATOR.'protected', "", str_replace('backend', '', Yii::$app->basePath));
                    $uploadDir = '/web/uploads/kamar/'; 
                    $namaFile = 'kamar'.'-'.$timeFile . ' - '. $n;
                    echo $value->saveAs($basePath .$uploadDir. $namaFile . '.' . $value->extension);//Upload files to 
                    $model->foto .= $namaFile . '.' . $value->extension.'**';
                    $n++;
                }
            }
            // print_r($model);
            echo $model->save();
            return $this->redirect(['/penginapan/view', 'idUser' => $model->penginapan->id_user]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Kamar model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $idUser = $model->penginapan->id_user;
        $model->delete();
        return $this->redirect(['/penginapan/view', 'idUser'=>$idUser]);
    }

    /**
     * Finds the Kamar model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Kamar the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Kamar::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
