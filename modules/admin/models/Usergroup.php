<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "usergroup".
 *
 * @property int $id
 * @property string $title
 * @property string $descr
 *
 * @property User[] $users
 */
class Usergroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usergroup';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'descr'], 'required'],
            [['title', 'descr'], 'string', 'max' => 255],
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
            'descr' => 'Descr',
        ];
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */

}