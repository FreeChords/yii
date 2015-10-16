<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Votar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

   

        
        
<div id="video" data-id="1">
        <iframe width="560" height="315" src="//www.youtube.com/embed/O3rpmctmC_M" frameborder="0" allowfullscreen></iframe>
        <a href="#" class="like" name="bueno">
            <img src="like.ico" alt="Me gusta">Me gusta
        </a>

        <a href="#" class="like" name="malo">
            <img src="dislike.ico" alt="No me gusta"> No me gusta
        </a>
        <div id="contenido"></div>
    </div>
</div>
