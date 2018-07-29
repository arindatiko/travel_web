<?php

namespace app\controllers;

use Yii;
use yii\web\UploadedFile;
use app\models\Penginapan;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
/**
 * PenginapanController implements the CRUD actions for Penginapan model.
 */
class PenginapanController extends Controller
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
     * Lists all Penginapan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Penginapan::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Penginapan model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($idUser)
    {
        $model = Penginapan::find()->where(['id_user'=>$idUser])->all();
        // echo "$idUser";
        return $this->render('view', [
            'model' => $model,
            'idUser'=>$idUser
        ]);
    }

    /**
     * Creates a new Penginapan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($idUser)
    {
        $model = new Penginapan();
        $this->layout='main-login';
        if ($model->load(Yii::$app->request->post()) ) {
            $model->id_user=$idUser;
            $files = UploadedFile::getInstances($model, 'file');
            // print_r($files);
            $timeFile = strtotime("now");

            $n = 0;
            foreach ($files as $key => $value) {
                $basePath = str_replace(DIRECTORY_SEPARATOR.'protected', "", str_replace('backend', '', Yii::$app->basePath));
                $uploadDir = '/web/uploads/penginapan/'; 
                $namaFile = 'kuliner'.'-'.$timeFile . ' - '. $n;
                echo $value->saveAs($basePath .$uploadDir. $namaFile . '.' . $value->extension);//Upload files to 
                $model->foto .= $namaFile . '.' . $value->extension.'**';
                $n++;
            }
            // echo $model->save();
            if ($model->save(false)) {
                \Yii::$app->getSession()->setFlash('success', 'Data Telah Tersimpan');
                return $this->redirect(['site/login']);
            }
            // return $this->redirect(['view', 'id' => $model->id_penginapan]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Penginapan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) ) {
            $files = UploadedFile::getInstances($model, 'file');

            if (count($files) > 0) {
                $model->foto = '';
                $timeFile = strtotime("now");

                $n = 0;
                foreach ($files as $key => $value) {
                    $basePath = str_replace(DIRECTORY_SEPARATOR.'protected', "", str_replace('backend', '', Yii::$app->basePath));
                    $uploadDir = '/web/uploads/penginapan/'; 
                    $namaFile = 'penginapan'.'-'.$timeFile . ' - '. $n;
                    $value->saveAs($basePath .$uploadDir. $namaFile . '.' . $value->extension);//Upload files to 
                    $model->foto .= $namaFile . '.' . $value->extension.'**';
                    $n++;
                }
            }
            if ($model->save(false)) {
                \Yii::$app->getSession()->setFlash('success', 'Data Telah Tersimpan');
                // return $this->redirect(['site/login']);
                return $this->redirect(['view', 'idUser' => $model->id_user]);
            }
            // return $this->redirect(['view', 'id' => $model->id_penginapan]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Penginapan model.
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
     * Finds the Penginapan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Penginapan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Penginapan::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
