
<?php

/* @var $this yii\web\View */

$this->title = 'FreeChords';
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
?>
<body background="home-picture.jpg">
<div class="site-index">

    <div class="jumbotron">
        <h1>Hola!</h1>

    <p>
        <?= Html::a('Eres Nuevo?', ['signup'], ['class' => 'btn btn-success']) ?>
    </p>
    </div>

   
</div>
</body>