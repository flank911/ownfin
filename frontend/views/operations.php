<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Operations */
/* @var $form ActiveForm */
?>
<div class="operations">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'uid') ?>
        <?= $form->field($model, 'cat_id') ?>
        <?= $form->field($model, 'date') ?>
        <?= $form->field($model, 'summ') ?>
        <?= $form->field($model, 'comment') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- operations -->
