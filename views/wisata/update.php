<?php

// use yii\helpers\Html;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use kartik\time\TimePicker;
use kartik\datetime\DateTimePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Wisata */

$this->title = 'Update Wisata: ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Wisatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama, 'url' => ['view', 'id' => $model->id_wisata]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="panel panel-default">
	<div class="panel-heading">
		Update
	</div>
	<div class="panel-body">
		<div class="wisata-update">
			<div class="wisata-form">
				<?php $form = ActiveForm::begin(); ?>

			        <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

			        <?= $form->field($model, 'desa')->textInput(['maxlength' => true]) ?>

			        <?= $form->field($model, 'kecamatan')->textInput(['maxlength' => true]) ?>

			        <div class="row">
			            <div class="col-md-6">
			                <?= $form->field($model, 'tiket_masuk_dewasa')->textInput(['maxlength' => true]) ?>
			            </div>
			            <div class="col-md-6">
			                <?= $form->field($model, 'tiket_masuk_anak')->textInput(['maxlength' => true]) ?>
			            </div>
			        </div>


			        <div class="row">
			            <div class="col-md-4">
			                <?= $form->field($model, 'biaya_parkir_motor')->textInput(['maxlength' => true]) ?>
			                
			            </div>
			            <div class="col-md-4">                
			                <?= $form->field($model, 'biaya_parkir_mobil')->textInput(['maxlength' => true]) ?>
			            </div>
			            <div class="col-md-4">                
			                <?= $form->field($model, 'biaya_parkir_bus')->textInput(['maxlength' => true]) ?>
			            </div>
			        </div>
			        

			        <!-- <?= $form->field($model, 'foto')->textarea(['rows' => 6]) ?> -->
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

			        <div class="row">
			            <div class="col-md-6">
			                <?= $form->field($model, 'posisi_lat')->textInput(['maxlength' => true]) ?>
			            </div>
			            <div class="col-md-6">
			                <?= $form->field($model, 'posisi_lng')->textInput(['maxlength' => true]) ?>
			            </div>
			        </div>
			        <div id="map"></div>

			        

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
			                <?= $form->field($model, 'jenis')->dropDownList([ 'Buatan' => 'Buatan', 'Alam' => 'Alam', 'Sejarah' => 'Sejarah', ], ['prompt' => '']) ?>
			            </div>
			            <div class="col-md-6">
			                <?= $form->field($model, 'akses')->dropDownList([ 'mudah' => 'Mudah', 'sulit' => 'Sulit', ], ['prompt' => '']) ?>
			            </div>
			        </div>

			        <div class="form-group">
			            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
			        </div>

			        <?php ActiveForm::end(); ?>		
			</div>

		</div>

	</div>
</div>
