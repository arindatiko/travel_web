<?php

use yii\helpers\Html;
// use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use kartik\file\FileInput;
use kartik\time\TimePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Kuliner */

$this->title = 'Update Kuliner: ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Kuliners', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama, 'url' => ['view', 'id' => $model->id_kuliner]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="panel panel-default">
	<div class="panel-heading">
		Update
	</div>
	<div class="panel-body">

		<div class="kuliner-update">
		    <?php $form = ActiveForm::begin(); ?>

		        <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

		        <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

		        <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>
		        <div class="row">
		            <div class="col-md-6">
		                <?= $form->field($model, 'posisi_lat')->textInput(['maxlength' => true]) ?>
		                
		            </div>
		            <div class="col-md-6">                
		                <?= $form->field($model, 'posisi_lng')->textInput(['maxlength' => true]) ?>
		            </div>
		        </div>

		        <div class="row">
		            <div class="col-md-4">
		                <?= $form->field($model, 'harga_tiket_parkir_motor')->textInput(['maxlength' => true]) ?>
		                
		            </div>
		            <div class="col-md-4">                
		                <?= $form->field($model, 'harga_tiket_parkir_mobil')->textInput(['maxlength' => true]) ?>
		            </div>
		            <div class="col-md-4">                
		                <?= $form->field($model, 'harga_tiket_parkir_bus')->textInput(['maxlength' => true]) ?>
		            </div>
		        </div>


		        <?= $form->field($model, 'file[]')->widget(FileInput::classname(), [
		                    'options' => [
		                        'multiple' => 'true',
		                        ],
		                    'pluginOptions' => [
		                            'showUpload' => false,
		                        ],
		                    ])
		            ?>

		        <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

		        <?= $form->field($model, 'fasilitas')->textarea(['rows' => 6]) ?>

		        <div class="rows">
		            <div class="col-md-6">
		                <label>Jam Buka</label>
		                    <?php 
		                        echo TimePicker::widget([
		                            'name' => 'jam_buka', 
		                            'value' => '11:24 AM',
		                            'pluginOptions' => [
		                                'showSeconds' => true
		                            ]
		                        ]);
		                    ?>        
		            </div>
		            <div class="col-md-6">
		                <label>Jam Buka</label>
		                    <?php 
		                        echo TimePicker::widget([
		                            'name' => 'jam_tutup', 
		                            'value' => '11:24 AM',
		                            'pluginOptions' => [
		                                'showSeconds' => true
		                            ]
		                        ]);
		                    ?>
		            </div>
		        </div>
		        
		        <div class="row">
		            <div class="col-md-6">
		                <?= $form->field($model, 'akses')->dropDownList([ 'mudah' => 'Mudah', 'sulit' => 'Sulit', 'sedang' => 'Sedang', ], ['prompt' => '']) ?>
		                
		            </div>
		            <div class="col-md-6">                
		                <?= $form->field($model, 'harga_atas')->textInput(['maxlength' => true]) ?>
		            </div>
		        </div>

		        

		        

		        <div class="form-group">
		            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		        </div>

		        <?php ActiveForm::end(); ?>

		</div>
</div>
</div>