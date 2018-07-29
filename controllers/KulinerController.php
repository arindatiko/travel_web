<?php

namespace app\controllers;

use Yii;
use app\models\Kuliner;
use app\models\Menu;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;
/**
 * KulinerController implements the CRUD actions for Kuliner model.
 */
class KulinerController extends Controller
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
     * Lists all Kuliner models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Kuliner::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Kuliner model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($idUser)
    {
        $model = Kuliner::find()->where(['id_user'=>$idUser])->all();
        // $dataProvider = new ActiveDataProvider([
        //     'query' => Menu::find()->where(['id_kuliner'=>$model->id_kuliner]),
        // ]);

        return $this->render('view', [
            'modelKuliner' => $model,
            'idUser'=>$idUser
            // 'dataProvider'=>$dataProvider
        ]);
    }

    /**
     * Creates a new Kuliner model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($idUser)
    {
        $model = new Kuliner();
        $this->layout = 'main-login';
        if ($model->load(Yii::$app->request->post()) ) {
            $model->id_user=$idUser;
            $files = UploadedFile::getInstances($model, 'file');
            // print_r($files);
            $timeFile = strtotime("now");

            $n = 0;
            foreach ($files as $key => $value) {
                $basePath = str_replace(DIRECTORY_SEPARATOR.'protected', "", str_replace('backend', '', Yii::$app->basePath));
                $uploadDir = '/web/uploads/kuliner/'; 
                $namaFile = 'kuliner'.'-'.$timeFile . ' - '. $n;
                $value->saveAs($basePath .$uploadDir. $namaFile . '.' . $value->extension);//Upload files to 
                $model->foto .= $namaFile . '.' . $value->extension.'**';
                $n++;
            }

            $model->jam_buka=Yii::$app->request->post()['jam_buka'];
            $model->jam_tutup=Yii::$app->request->post()['jam_tutup'];
            if ($model->save(false)) {
                \Yii::$app->getSession()->setFlash('success', 'Data Telah Tersimpan');
                return $this->redirect(['site/login']);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Kuliner model.
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
                    $uploadDir = '/web/uploads/kuliner/'; 
                    $namaFile = 'kuliner'.'-'.$timeFile . ' - '. $n;
                    $value->saveAs($basePath .$uploadDir. $namaFile . '.' . $value->extension);//Upload files to 
                    $model->foto .= $namaFile . '.' . $value->extension.'**';
                    $n++;
                }
            }
            $model->jam_buka=Yii::$app->request->post()['jam_buka'];
            $model->jam_tutup=Yii::$app->request->post()['jam_tutup'];

            if ($model->save(false)) {
                \Yii::$app->getSession()->setFlash('success', 'Data Telah Tersimpan');
                // return $this->redirect(['site/login']);
                return $this->redirect(['view', 'idUser' => $model->id_user]);
            }
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Kuliner model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id)->delete();
        $idUser = $model->id_user;

        return $this->redirect(['/kuliner/view', 'idUser'=>$idUser]);
    }

    /**
     * Finds the Kuliner model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Kuliner the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Kuliner::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
