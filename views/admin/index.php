<?php
use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
$this->title = 'Админ панель';
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
<h1><?= Html::encode($this->title) ?></h1>
<button type="button" class="btn btn-light">Управление категориями</button>
<button type="button" class="btn btn-light">Просмотреть товарами</button></td>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ФИО заказчика</th>
      <th scope="col">Количество заказанных товаров</th>
      <th scope="col">Таймстамп заказа</th>
      <th scope="col">Статус
        <select class="custom-select" >
  <option selected>Фильтр</option>
  <option value="1">Новый</option>
  <option value="2">Подтвержденный</option>
  <option value="3">Отмененные</option>
</select>
</th>
      <th scope="col">Действие</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Ооо Ооо Ооо</td>
      <td>20</td>
      <td>2022-06-09 13:05:24</td>
      <td><strong>Новый</strong></td>
      <td>
      <button type="button" class="btn btn-light">Подтвердить заказ</button>
      <button type="button" class="btn btn-light">Отменить заказ</button>
      <button type="button" class="btn btn-light">Просмотреть заказ</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Ааа Ааа</td>
      <td>20</td>
      <td>2022-06-09 13:05:24</td>
      <td><strong>Новый</strong></td>
      <td>
      <button type="button" class="btn btn-light">Подтвердить заказ</button>
      <button type="button" class="btn btn-light">Отменить заказ</button>
      <button type="button" class="btn btn-light">Просмотреть заказ</button></td>
        </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Еее Еее Еее</td>
      <td>20</td>
      <td>2022-06-09 13:05:24</td>
      <td><strong>Новый</strong></td>
      <td>
      <button type="button" class="btn btn-light">Подтвердить заказ</button>
      <button type="button" class="btn btn-light">Отменить заказ</button>
      <button type="button" class="btn btn-light">Просмотреть заказ</button></td>
        </td>
    </tr>
  </tbody>
</table>
</head>