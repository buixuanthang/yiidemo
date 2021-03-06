<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */

$this->title = $model->Pro_id;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Pro_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Pro_id], [
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
            'Pro_id',
            'Pro_name',
            'Price',
            'SaleOf',
            'StartSale',
            'EndSale',
            'PriceSale',
            'Quanlity',
            'Size',
            'Color',
            'Evaluation',
            'Tags',
            'Image',
            'Keywords',
            'Description',
            'Content',
            'GroupID',
            'Status',
            'CateID',
            'SuppliresID',
            'UserID',
            'CreatedAt',
            'UpdateAt',
        ],
    ]) ?>

</div>
