<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = 'Create Post';
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<!--<div class="post-create">-->

    <!--<h1><?//= Html::encode($this->title) ?></h1>-->

    <div class="jumbotron">
        <h1>Link Storage</h1>

        <p class="lead">Input your links and press the button</p>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

<!--</div>-->
