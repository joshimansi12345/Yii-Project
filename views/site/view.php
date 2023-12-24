<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <?php if(yii::$app->session->hasFlash('message')): ?>
       <?php echo yii::$app->session->getFlash('message'); ?>
    <?php endif; ?>

<h1 style="color: #337ab7; ">View Post !</h1>
        
<div class="body-content">
   <ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center">

    <?php echo $post->title; ?>
    </li>
   </ul><br>

   <ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center">
    <?php echo $post->descrription; ?> 
    </li>
   </ul><br>

   <ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center">
    <?php echo $post->category; ?> 
    </li>
   </ul><br>
   <div class="row col-lg-2">
   <a href=<?php echo Yii::$app->HomeUrl; ?> class="btn btn-primary">Go Back</a>
   </div>

</div>
    </div>
