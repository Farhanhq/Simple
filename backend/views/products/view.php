<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="products-view">

    <h1><?= Html::encode($this->title) ?></h1>
     <?php if (Yii::$app->session->hasFlash('success')) {
       echo  \yii2mod\alert\Alert::widget(); 
     } ?>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_email:email',
            'name',
            'description',
            'ikey',
            'amount',
            'quantity',
            'availability',
            'product_condition',
            'brand',
            'stock',
            'image',
            'status',
            'created_at',
        ],
    ]) ?>

</div>
