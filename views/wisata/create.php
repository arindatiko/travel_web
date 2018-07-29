<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Wisata */

$this->title = 'Create Wisata';
$this->params['breadcrumbs'][] = ['label' => 'Wisatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wisata-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
