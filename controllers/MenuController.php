<?php

namespace app\controllers;

use Yii;
use app\models\Menu;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;
/**
 * MenuController implements the CRUD actions for Menu model.
 */
class MenuController extends Controller
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
     * Lists all Menu models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Menu::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Menu model.
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
     * Creates a new Menu model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($idKuliner, $idUser)
    {
        $model = new Menu();

        if ($model->load(Yii::$app->request->post()) ) {
            $model->id_kuliner = $idKuliner;

            $files = UploadedFile::getInstances($model, 'file');
            // print_r($files);
            $timeFile = strtotime("now");

            $n = 0;
            foreach ($files as $key => $value) {
                $basePath = str_replace(DIRECTORY_SEPARATOR.'protected', "", str_replace('backend', '', Yii::$app->basePath));
                $uploadDir = '/web/uploads/menu/'; 
                $namaFile = 'menu'.'-'.$timeFile . ' - '. $n;
                echo $value->saveAs($basePath .$uploadDir. $namaFile . '.' . $value->extension);//Upload files to 
                $model->foto .= $namaFile . '.' . $value->extension.'**';
                $n++;
            }
            echo $model->save();
            // print_r($model);
            return $this->redirect(['/kuliner/view', 'idUser' => $idUser]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionCreateMenu()
    {
        $model = new Menu();
        return $this->renderAjax('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Menu model.
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
                    $uploadDir = '/web/uploads/menu/'; 
                    $namaFile = 'menu'.'-'.$timeFile . ' - '. $n;
                    echo $value->saveAs($basePath .$uploadDir. $namaFile . '.' . $value->extension);//Upload files to 
                    $model->foto .= $namaFile . '.' . $value->extension.'**';
                    $n++;
                }
            }
            // print_r($model);
            echo $model->save();
            return $this->redirect(['/kuliner/view', 'idUser' => $model->kuliner->id_user]);
            // return $this->redirect(['view', 'id' => $model->id_menu]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Menu model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model= $this->findModel($id);
        $idUser = $model->kuliner->id_user;
        $model->delete();
        return $this->redirect(['/kuliner/view', 'idUser'=>$idUser]);
    }

    /**
     * Finds the Menu model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Menu the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Menu::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
