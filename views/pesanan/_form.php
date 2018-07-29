<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pesanan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pesanan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_customer')->textInput() ?>

    <?= $form->field($model, 'id_driver')->textInput() ?>

    <?= $form->field($model, 'posisi_lat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'posisi_lng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'waktu_pesan')->textInput() ?>

    <?= $form->field($model, 'waktu_acc')->textInput() ?>

    <?= $form->field($model, 'total_budget')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'status_selesai')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
