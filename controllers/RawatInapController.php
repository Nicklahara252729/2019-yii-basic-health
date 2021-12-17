<?php

namespace app\controllers;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\Url;

class RawatInapController extends \yii\web\Controller
{
    public function init(){
        parent::init();
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }
    }
    
    public function actionIndex()
    {
        return $this->render('index');
    }

}
