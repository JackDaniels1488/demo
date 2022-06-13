<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Каталог';
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'category_id',
                'filter' => [''=>'Все категории','1'=>'лазеный принтер','2'=>'струйный принтер','3'=>'термопринтер'],
                'value' => function ($model, $key, $index, $column)
                {
                    return $model->category->title;
                }
                // ...
            ],[
                'attribute' => 'title',
                'filter' => false,
            ],[
                'attribute' => 'price',
                'filter' => false,                
            ],[
                'attribute' => 'photo',
                'format' => 'raw',
                'filter' => false,
                'value' => function ($model, $key, $index, $column)
                {
                    return Html::img($model->photo,['width'=>'150px']);
                }
            ],
            //'model',
            [
                'class' => ActionColumn::className(),'template' => '{view}',
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
