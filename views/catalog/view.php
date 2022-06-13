<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = $model->title;
\yii\web\YiiAsset::register($this);
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            
            [                      // the owner name of the model
                'label' => 'Категория',
                'value' => $model->category->title,
            ],
            'title',
            'year',
            'price',
            'count',
            'country',
            'photo:image',
            'model',
        ],
    ]) ?>

</div>
