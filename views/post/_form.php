<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'value')->textArea(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'author_id')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'date')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'views')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descr')->textArea(['maxlength' => true]) ?>
    <?
        $model->views = 13;

    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
