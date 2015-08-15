<?php

//use yii\helpers\Html;
//use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

$this->title = 'Register';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?//= Html::encode($this->title) ?></h1>

<div class="user-create">

    <div class="user-form">

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>

</div>