<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Perfil';
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="home-picture.jpg">
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

   <img src="pearl-jam.jpg" Alt="Pearl jam" class="img-rounded"  width="900" height="300">

  <div>
   <button type="button" class="btn btn-primary">Compartir</button>
 </div>

  <div><form action="action_page.php">
  <textarea name="message" rows="10" cols="70">
  ...
  </textarea>
  <audio controls>
  <source src="horse.ogg" type="audio/ogg">
  <source src="Pearl Jam-Even Flow.mp3" type="audio/mpeg">

</audio>
  <br><br>
  <input type="submit">
</form></div>
    <code><?= __FILE__ ?></code>
</div>
</body>
