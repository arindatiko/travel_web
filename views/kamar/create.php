<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Kamar */

$this->title = 'Create Kamar';
$this->params['breadcrumbs'][] = ['label' => 'Kamars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kamar-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
