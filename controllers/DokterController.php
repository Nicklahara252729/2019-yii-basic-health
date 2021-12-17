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

use app\models\Dokter;
use app\models\DokterForm;

class DokterController extends Controller
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

    public function  actionIndex(){
        $view = Dokter::find()->orderBy(['id_dokter'=>SORT_DESC])->all(); 

        return $this->render('index', [
            'view' => $view,
        ]);
    }

    public function actionAdd(){
        $forms = new DokterForm();

        if ($forms->load(Yii::$app->request->post()) && $forms->validate())
        {
            $request = Yii::$app->request;

            $Dokter = new Dokter();
            $Dokter->nama_dokter = $request->post('DokterForm')['nama_dokter'];
            $Dokter->jenkel = $request->post('DokterForm')['jenkel'];
            $Dokter->alamat = $request->post('DokterForm')['alamat'];
            $Dokter->no_telp = $request->post('DokterForm')['no_telp'];
            $Dokter->spesialis = $request->post('DokterForm')['spesialis'];
            $Dokter->save();

            return $this->redirect(Url::to(['dokter/index']));
        }
        else 
        {
            return $this->render('add', ['forms'=>$forms]);

        }
    }

    public function actionHapus($id_dokter)
    {
        $Dokter = Dokter::findOne(['id_dokter' => $id_dokter]);
        $Dokter->delete();

        return $this->redirect(Url::to(['dokter/index']));
    }

    public function actionEdit($id_dokter)
    {
        $forms = new DokterForm();

        if ($forms->load(Yii::$app->request->post()) && $forms->validate())
        {
            $request = Yii::$app->request;

            $Dokter = Dokter::findOne(['id_dokter', $id_dokter]);
            $Dokter->nama_dokter = $request->post('DokterForm')['nama_dokter'];
            $Dokter->jenkel = $request->post('DokterForm')['jenkel'];
            $Dokter->alamat = $request->post('DokterForm')['alamat'];
            $Dokter->no_telp = $request->post('DokterForm')['no_telp'];
            $Dokter->spesialis = $request->post('DokterForm')['spesialis'];
            
            if($Dokter->save()){
                return $this->redirect(Url::to(['dokter/index']));
            }

            
        }
        else 
        {
            $dokterval = Dokter::findOne(['id_dokter', $id_dokter]);
            return $this->render('edit', ['forms'=>$forms, 'dokterval'=>$dokterval]);

        }
    }

}
