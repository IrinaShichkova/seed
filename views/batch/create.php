<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Batch */

$this->title = 'Добавить новую упаковку';
$this->params['breadcrumbs'][] = ['label' => 'Виды упаковки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="batch-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
