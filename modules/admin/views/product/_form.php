<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Category;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

  <?php $form = ActiveForm::begin(); ?>

  <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'price')->textInput() ?>

  <?= $form->field($model, 'id_category')->dropDownList(
      ArrayHelper::map(Category::find()->all(), 'id', 'title')
  )->label('Category') ?>

  <?= $form->field($model, 'product_group')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

  <div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
  </div>

  <?php ActiveForm::end(); ?>

</div>