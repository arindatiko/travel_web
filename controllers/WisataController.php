<?php

namespace app\controllers;

use Yii;
use app\models\Wisata;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;
/**
 * WisataController implements the CRUD actions for Wisata model.
 */
class WisataController extends Controller
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
     * Lists all Wisata models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Wisata::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Wisata model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($idUser)
    {
        $model = Wisata::find()->where(['id_user'=>$idUser])->all();
        return $this->render('view', [
            'model' => $model,
            'idUser'=>$idUser
        ]);
    }

    /**
     * Creates a new Wisata model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($idUser)
    {
        $model = new Wisata();
        $this->layout = 'main-login';
        if ($model->load(Yii::$app->request->post()) ) {
            // echo "string";
            $model->id_user=$idUser;
            $files = UploadedFile::getInstances($model, 'file');
            // print_r($files);
            $timeFile = strtotime("now");

            $n = 0;
            foreach ($files as $key => $value) {
                $basePath = str_replace(DIRECTORY_SEPARATOR.'protected', "", str_replace('backend', '', Yii::$app->basePath));
                $uploadDir = '/web/uploads/wisata/'; 
                $namaFile = 'wisata'.'-'.$timeFile . ' - '. $n;
                echo $value->saveAs($basePath .$uploadDir. $namaFile . '.' . $value->extension);//Upload files to 
                $model->foto .= $namaFile . '.' . $value->extension.'**';
                $n++;
            }

            $model->jam_buka=Yii::$app->request->post()['jam_buka'];
            $model->jam_tutup=Yii::$app->request->post()['jam_tutup'];
            // $model->jam_datang=Yii::$app->request->post()['jam_datang'];
            if ($model->save()) {
                \Yii::$app->getSession()->setFlash('success', 'Data Telah Tersimpan');
                return $this->redirect(['site/login']);
            }
            // print_r($model);
            // return $this->redirect(['view', 'id' => $model->id_wisata]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Wisata model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        // $this->layout = 'main-login';
        if ($model->load(Yii::$app->request->post())) {

            $files = UploadedFile::getInstances($model, 'file');
            if (count($files)!=0) {
                $model->foto = '';
                $timeFile = strtotime("now");
                $n = 0;
                foreach ($files as $key => $value) {
                    $basePath = str_replace(DIRECTORY_SEPARATOR.'protected', "", str_replace('backend', '', Yii::$app->basePath));
                    $uploadDir = '/web/uploads/wisata/'; 
                    $namaFile = 'wisata'.'-'.$timeFile . ' - '. $n;
                    echo $value->saveAs($basePath .$uploadDir. $namaFile . '.' . $value->extension);//Upload files to 
                    $model->foto .= $namaFile . '.' . $value->extension.'**';
                    $n++;
                }
            }

            $model->jam_buka=Yii::$app->request->post()['jam_buka'];
            $model->jam_tutup=Yii::$app->request->post()['jam_tutup'];
            // $model->jam_datang=Yii::$app->request->post()['jam_datang'];
            if ($model->save()) {
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
     * Deletes an existing Wisata model.
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
     * Finds the Wisata model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Wisata the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Wisata::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
