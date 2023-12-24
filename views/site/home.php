<?php

use yii\helpers\Html;
/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">
  <?php if(yii::$app->session->hasFlash('message')): ?>
    <div class="alert alert-dismissible alert-success">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Well done ! we sucessfully updated </strong>
    </div>
<?php endif; ?>
    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 style="color: #337ab7; ">Yii CRUD Application !</h1>

    </div>
    <div class="row">
      <span style="margin-bottom: 20px;"><?=Html::a('Create',['/site/create'],['class'=>'btn btn-primary']) ?></span>
    </div>

    <div class="body-content">
     
        <div class="row">
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Category</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php if(count($post) > 0): ?>
       <?php foreach($post as $posts):  ?>

    <tr class="table-active">
      <th scope="row"><?php echo $posts->id; ?></th>
      <td><?php echo $posts->title; ?></td>
      <td><?php echo $posts->descrription; ?></td>
      <td><?php echo $posts->category; ?></td>ht
      <td>
        <span><?= Html::a('View',['view','id'=> $posts->id],['class'=>'btn btn-primary']) ?></span>
        <span><?= Html::a('Update',['update','id'=> $posts->id],['class'=>'btn btn-success']) ?></span>
        <span><?= Html::a('Delete',['delete','id'=> $posts->id],['class'=>'btn btn-danger']) ?></span>
      </td>
    </tr>
          <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td>No record find! </td>
        </tr>
        <?php endif; ?>
      </tbody>
</table>
        </div>
    </div>
    </div>
</div>
