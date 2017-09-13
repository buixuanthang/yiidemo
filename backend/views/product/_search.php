<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProductSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Pro_id') ?>

    <?= $form->field($model, 'Pro_name') ?>

    <?= $form->field($model, 'Price') ?>

    <?= $form->field($model, 'SaleOf') ?>

    <?= $form->field($model, 'StartSale') ?>

    <?php // echo $form->field($model, 'EndSale') ?>

    <?php // echo $form->field($model, 'PriceSale') ?>

    <?php // echo $form->field($model, 'Quanlity') ?>

    <?php // echo $form->field($model, 'Size') ?>

    <?php // echo $form->field($model, 'Color') ?>

    <?php // echo $form->field($model, 'Evaluation') ?>

    <?php // echo $form->field($model, 'Tags') ?>

    <?php // echo $form->field($model, 'Image') ?>

    <?php // echo $form->field($model, 'Keywords') ?>

    <?php // echo $form->field($model, 'Description') ?>

    <?php // echo $form->field($model, 'Content') ?>

    <?php // echo $form->field($model, 'GroupID') ?>

    <?php // echo $form->field($model, 'Status') ?>

    <?php // echo $form->field($model, 'CateID') ?>

    <?php // echo $form->field($model, 'SuppliresID') ?>

    <?php // echo $form->field($model, 'UserID') ?>

    <?php // echo $form->field($model, 'CreatedAt') ?>

    <?php // echo $form->field($model, 'UpdateAt') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
