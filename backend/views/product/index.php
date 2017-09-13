<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Pro_id',
            'Pro_name',
            'Price',
            'SaleOf',
            'StartSale',
            // 'EndSale',
            // 'PriceSale',
            // 'Quanlity',
            // 'Size',
            // 'Color',
            // 'Evaluation',
            // 'Tags',
            // 'Image',
            // 'Keywords',
            // 'Description',
            // 'Content',
            // 'GroupID',
            // 'Status',
            // 'CateID',
            // 'SuppliresID',
            // 'UserID',
            // 'CreatedAt',
            // 'UpdateAt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
