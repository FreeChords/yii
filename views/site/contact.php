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
<body background="home-picture.jpg">

<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
 <p> votar por artistas,musica,video </p>

 <div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle"
          data-toggle="dropdown">
    Votar por: <span class="caret"></span>
  </button>
 
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">Artista</a></li>
    <li><a href="#">Video</a></li>
    <li><a href="#">Cancion</a></li>
    <li class="divider"></li>
    <li><a href="#">otro</a></li>
  </ul>
</div>
   

        
        
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
</body>