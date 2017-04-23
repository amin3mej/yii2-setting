<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model amin3mej\setting\models\Setting */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="setting-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'key')->textInput(['disabled' => true, 'maxlength' => true]) ?>

    <?= $form->field($model, 'value')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('بروزرسانی', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
