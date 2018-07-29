<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
/* @var $this yii\web\View */
/* @var $model app\models\Kamar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kamar-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'banyak_kamar')->textInput() ?>

    <?= $form->field($model, 'kapasitas')->textInput() ?>

    <?= $form->field($model, 'fasilitas')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'harga')->textInput(['maxlength' => true]) ?>


   <?= $form->field($model, 'file[]')->widget(FileInput::classname(), [
                'options' => [
                    'multiple' => 'true',
                    ],
                'pluginOptions' => [
                        'showUpload' => false,
                        'required'=>$model->isNewRecord?true :false
                    ],
                ])
        ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
