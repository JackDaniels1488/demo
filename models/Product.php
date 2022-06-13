<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int $category_id
 * @property string $title
 * @property int $year
 * @property int $price
 * @property int $count
 * @property string $country
 * @property string $photo
 * @property string $model
 *
 * @property Category $category
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
            [['category_id', 'title', 'year', 'price', 'count', 'country', 'photo', 'model'], 'required'],
            [['category_id', 'year', 'count'], 'integer'],
            [['title', 'country','price', 'photo', 'model'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'category_id' => 'Категория',
            'title' => 'Название',
            'year' => 'Год',
            'price' => 'Цена',
            'count' => 'Количество',
            'country' => 'Страна',
            'photo' => 'Фото',
            'model' => 'Модель',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
