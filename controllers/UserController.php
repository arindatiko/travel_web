<?php

namespace app\controllers;

use Yii;
use app\models\Kendaraan;
use app\models\Wisata;
use app\models\Kuliner;
use app\models\Penginapan;
use app\models\User;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;
/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index','view','update','delete'],
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
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex($status)
    {
        $dataProviderDriver = new ActiveDataProvider([
            'query' => User::find()
            ->where(['user_type'=>'driver'])
            ->andWhere(['status'=>$status])
        ]);

        $dataProviderWisata = new ActiveDataProvider([
            'query' => User::find()
            ->where(['user_type'=>'admin_wisata'])
            ->andWhere(['status'=>$status])
        ]);

        $dataProviderKuliner = new ActiveDataProvider([
            'query' => User::find()
            ->where(['user_type'=>'admin_kuliner'])
            ->andWhere(['status'=>$status])
        ]);

        $dataProviderHotel = new ActiveDataProvider([
            'query' => User::find()
            ->where(['user_type'=>'admin_hotel'])
            ->andWhere(['status'=>$status])
        ]);

        return $this->render('index', [
            'dataProviderDriver'=>$dataProviderDriver,
            'dataProviderWisata'=>$dataProviderWisata,
            'dataProviderKuliner'=>$dataProviderKuliner,
            'dataProviderHotel'=>$dataProviderHotel,
        ]);
    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {   
        $model= $this->findModel($id);
        
        if ($model->user_type == 'admin_wisata') {
            $modelData = Wisata::find()->where(['id_user'=>$id])->all();
        }

        if ($model->user_type == 'admin_hotel') {
            $modelData = Penginapan::find()->where(['id_user'=>$id])->all();
        }

        if ($model->user_type == 'admin_kuliner') {
            $modelData = Kuliner::find()->where(['id_user'=>$id])->all();
        }

        if ($model->user_type == 'driver') {
            $modelData = Kendaraan::find()->where(['id_user'=>$id])->all();
        }
        
        return $this->render('view', [
            'model' => $model,
            'modelData'=>$modelData,
        ]);
    }

    public function actionVerifikasi($id)
    {
        // echo "string";
        $model= $this->findModel($id);
        $model->status = 1;
        $model->save();
        Yii::$app->getSession()->setFlash('success', 'User Telah Terverifikasi');
        //return $this->redirect(['view', 'id' => $idUser]);
        Yii::$app->user->logout();

        return $this->redirect(['site/login']);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();
        $this->layout = 'main-login';
        if ($model->load(Yii::$app->request->post())) {
            // echo "string";
            // print_r($model);
            $model->status=0;

            echo $model->save();
            // die();
            if ($model->save()) {
                if ($model->user_type == 'driver') {
                    return $this->redirect(['/kendaraan/create', 'idUser' => $model->id_user]);   
                }elseif ($model->user_type == 'admin_wisata') {
                    // echo "strings";
                    return $this->redirect(['/wisata/create', 'idUser' => $model->id_user]);   
                }elseif ($model->user_type == 'admin_kuliner') {
                    return $this->redirect(['/kuliner/create', 'idUser' => $model->id_user]);   
                }elseif ($model->user_type == 'admin_hotel') {
                    return $this->redirect(['/penginapan/create', 'idUser' => $model->id_user]);
                }else{
                    \Yii::$app->getSession()->setFlash('success', 'Data Telah Tersimpan');
                    return $this->redirect(['login']);     
                }
            }else{
                \Yii::$app->getSession()->setFlash('error', 'Data Gagal Tersimpan');
                    return $this->redirect(['login']);     
                // echo "string";
                // return $this->redirect(['view', 'id' => $model->id_user]);
            }
            
        } else {
            return $this->render('create', [
                'model' => $model,
                // 'modelWisata'=>$modelWisata
                // 'modelKendaraan'=>$modelKendaraan
            ]);
        }
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_user]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing User model.
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
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
