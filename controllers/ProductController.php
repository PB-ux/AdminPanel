<?php 

namespace app\controllers;
use Yii;
use yii\rest\ActiveController;
use app\models\Product;
use yii\web\Response;

class ProductController extends ActiveController
{

  public function init() {
      \Yii::$app->response->format = Response::FORMAT_JSON;
  }

    public $modelClass = 'app\models\Product';
    
    public $serializer = [
      'class' => 'yii\rest\Serializer',
      'collectionEnvelope' => 'items',
    ];

  public function actionIndex() 
  {
    $products = Product::find()->all();

    return $products;
  }

  public function actionGetProduct() 
  {
    $request = \Yii::$app->request;

    $id = $request->getBodyParam('id');

    $product = Product::findOne(['id' => $id]);
    return $product;
  }
}