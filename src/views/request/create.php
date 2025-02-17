<?php

use yii\helpers\Html;
use app\models\Manager;

/* @var $this yii\web\View */
/* @var $model app\models\Request */

$this->title = 'Добавление заявки';
$this->params['breadcrumbs'][] = ['label' => 'Заявки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="request-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
