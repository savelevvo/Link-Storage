<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Link Storage</h1>

        <p class="lead">Input your links and press the button</p>
    </div>

    <div class="body-content">
        <!--<div class="row">-->
            <form class="text-center" name="links" method="post" action="post/add">
                <textarea maxlength="2048" rows="10" name="post" placeholder="Each link on new line" style="resize: none;"></textarea><br />
                <input type="submit" value="Generate" class="btn btn-lg btn-success">
            </form>
        <!--</div>-->
    </div>
</div>
