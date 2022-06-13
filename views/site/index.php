<?php

use yii\bootstrap4\Carousel;
use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
$this->title = 'О нас';
?>
<h1>Логотип</h1>
<?=
Html::img('@web/images/logo.png',['class' => 'fit-picture']);
?>
<h1>Девиз</h1>
<p>Пока принтер печатает — вы отдыхаете!</p>
<h1>Новинки</h1>
<?php
$rows =(new \yii\db\Query())
->select('title, photo')
->from('carousel')
->orderBy(['id' => SORT_DESC])
->limit(5)
->all();

function image($hope)
{
    return  [
        'content' => Html::img('@web/images/' . $hope['photo']),
        'caption' => "<h4 class = 'text-danger'>{$hope['title']}</h4>",
        'options' => ['class' => 'text-center'],
    ];
}
echo Carousel::widget([
    'items' => array_map('image', $rows)
]);
?>
