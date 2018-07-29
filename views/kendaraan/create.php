<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Kendaraan */

$this->title = 'Create Kendaraan';
$this->params['breadcrumbs'][] = ['label' => 'Kendaraans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kendaraan-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
