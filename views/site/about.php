<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Perfil';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

   <img src="pearl-jam.jpg" Alt="Pearl jam" class="img-rounded"  width="900" height="300">
<br><br>
  <div>
  
   <form method="post" enctype="multipart/form-data"><br>
<input type=file size=60 name="file1"><br>
<input type=submit value="subir"><br>
</form><br>
 </div>

  <div><form action="comentario.php" method="post">
  <textarea name="message" rows="5" cols="60">
  </textarea></form>
  <input type="submit">
</div>
<BR>
  <div> <audio controls>
  <source src="Pearl Jam-Even Flow.mp3" type="audio/mpeg">

</audio></div>
    
</div>
