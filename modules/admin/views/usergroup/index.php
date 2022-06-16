<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\UsergroupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Group of user';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usergroup-index">

  <h1><?= Html::encode($this->title) ?></h1>

  <p>
    <?= Html::a('Create Usergroup', ['create'], ['class' => 'btn btn-success']) ?>
  </p>

  <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

  <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'descr',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>
  <?= Html::a('Back', ['/admin'], ['class'=>'btn btn-primary']) ?>


</div>