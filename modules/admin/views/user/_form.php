<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Usergroup;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

  <?php $form = ActiveForm::begin(); ?>

  <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'id_group')->dropDownList(
      ArrayHelper::map(Usergroup::find()->all(), 'id', 'title')
  )->label('Category') ?>

  <div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
  </div>

  <?php ActiveForm::end(); ?>

</div>