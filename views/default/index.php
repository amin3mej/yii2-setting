<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'تنظیمات';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="setting-index">
    <br><br>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'key',
            'value:ntext',
            'description'

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
