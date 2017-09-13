<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Pro_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Price')->textInput() ?>

    <?= $form->field($model, 'SaleOf')->textInput() ?>

    <?= $form->field($model, 'StartSale')->textInput() ?>

    <?= $form->field($model, 'EndSale')->textInput() ?>

    <?= $form->field($model, 'PriceSale')->textInput() ?>

    <?= $form->field($model, 'Quanlity')->textInput() ?>

    <?= $form->field($model, 'Size')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Evaluation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tags')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Image')->textInput(['maxlength' => true,'id'=>"imageFile",'placeholder'=>'click chọn ảnh']) ?>

    <?= $form->field($model, 'Keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Content')->textarea(['id' =>'content']) ?>

    <?= $form->field($model, 'GroupID')->textInput() ?>

    <?= $form->field($model, 'Status')->textInput() ?>

    <?= $form->field($model, 'CateID')->textInput() ?>

    <?= $form->field($model, 'SuppliresID')->textInput() ?>

  
    <?= $form->field($model, 'CreatedAt')->textInput() ?>

    <?= $form->field($model, 'UpdateAt')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
