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

<h1 style="color: #337ab7; ">Update Post !</h1>
        
<div class="body-content">
    <?php

    $form = ActiveForm::begin() ?>
    <div class="row">

    <div class="form-group">
        <div class="col-lg-6">

        <?= $form->field($post, 'title'); ?>
        </div>
    </div>

        </div>

        <div class="row">

<div class="form-group">
    <div class="col-lg-6">

    <?= $form->field($post, 'descrription')->textarea(['rows'=>'6']); ?>
    </div>
</div>

    </div>

    <div class="row">

<div class="form-group">
    <div class="col-lg-6">

<?php $items = ['ecommerce'=>'ecommerce','CMS'=>'CMS','MVC'=>'MVC']; ?>
        <?= $form->field($post, 'category')->dropdownList($items,['promt'=>'Select']); ?>
    </div>
</div>


<div class="row">

<div class="form-group">
    <div class="col-lg-6">
        <div class="col-lg-3">
    <?= Html::submitButton('Update Post',['class'=>'btn btn-primary']); ?>
    </div><br>
    <div class="col-lg-2">
        <a href=<?php echo Yii::$app->HomeUrl; ?> class="btn btn-primary">Go Back</a>
    </div>
</div>
</div>

    </div>
        <?php ActiveForm:: end(); ?>
    </div>
    </div>
