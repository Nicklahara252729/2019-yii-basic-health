<?php

namespace app\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\data\ActiveDataProvider;

use app\models\Pasien;
use app\models\PasienForm;

class PasienController extends Controller
{
    public function init(){
        parent::init();
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['data', 'add', 'edit',],
                'rules' => [
                    [
                        'actions' => ['data', 'add', 'edit',],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function  actionData(){
        $view = Pasien::find()->orderBy(['id_pasien'=>SORT_DESC])->all(); 

        return $this->render('index', [
            'view' => $view,
        ]);
    }

    public function actionAdd(){
        $forms = new PasienForm();

        if ($forms->load(Yii::$app->request->post()) && $forms->validate())
        {
            $request = Yii::$app->request;

            $Pasien = new Pasien();
            $Pasien->nama_pasien = $request->post('PasienForm')['nama_pasien'];
            $Pasien->tgl_lahir = $request->post('PasienForm')['tgl_lahir'];
            $Pasien->jenkel = $request->post('PasienForm')['jenkel'];
            $Pasien->alamat = $request->post('PasienForm')['alamat'];
            $Pasien->notelp = $request->post('PasienForm')['notelp'];
            $Pasien->save();

            return $this->redirect(Url::to(['pasien/data']));
        }
        else 
        {
            return $this->render('add', ['forms'=>$forms]);

        }
    }

    public function actionHapus($id_pasien)
    {
        $pasien = Pasien::findOne(['id_pasien' => $id_pasien]);
        $pasien->delete();

        return $this->redirect(Url::to(['pasien/data']));
    }

    public function actionEdit($id_pasien)
    {
        $forms = new PasienForm();

        if ($forms->load(Yii::$app->request->post()) && $forms->validate())
        {
            $request = Yii::$app->request;

            $Pasien = new Pasien();
            $Pasien->nama_pasien = $request->post('PasienForm')['nama_pasien'];
            $Pasien->tgl_lahir = $request->post('PasienForm')['tgl_lahir'];
            $Pasien->jenkel = $request->post('PasienForm')['jenkel'];
            $Pasien->alamat = $request->post('PasienForm')['alamat'];
            $Pasien->notelp = $request->post('PasienForm')['notelp'];
            
            if($Pasien->save()){
                return $this->redirect(Url::to(['pasien/data']));
            }

            
        }
        else 
        {
            $pasienval = Pasien::findOne(['id_pasien', $id_pasien]);
            return $this->render('edit', ['forms'=>$forms, 'pasienval'=>$pasienval]);

        }
    }

}
