<?php

namespace app\controllers;
use Yii;

class AdminController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function beforeAction($action)
    {
        // your custom code here, if you want the code to run before action filters,
        // which are triggered on the [[EVENT_BEFORE_ACTION]] event, e.g. PageCache or AccessControl
    
        if (!parent::beforeAction($action)) {
            return false;
        }
    
        if (Yii::$app->user->isGuest or Yii::$app->user->identity->role_id == 2)
        {
            return $this->goHome();
        }
    
        return true; // or false to not run the action
    }
}
