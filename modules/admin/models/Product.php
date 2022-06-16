<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $title
 * @property int $price
 * @property int $id_category
 * @property string $product_group
 * @property string $description
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'price', 'id_category', 'product_group', 'description'], 'required'],
            [['price', 'id_category'], 'integer'],
            [['description'], 'string'],
            [['title', 'product_group'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'price' => 'Price',
            'id_category' => 'Id Category',
            'product_group' => 'Product Group',
            'description' => 'Description',
        ];
    }
    
    public function getCategory() {
        return $this->hasOne(Category::class, ['id' => 'id_category']);
    }
}