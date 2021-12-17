<?php

namespace app\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\Url;

use app\models\Obat;
use app\models\ObatForm;

class ObatController extends Controller
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
                'only' => ['index', 'add', 'edit',],
                'rules' => [
                    [
                        'actions' => ['index', 'add', 'edit',],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    
    public function actionIndex()
    {

        $view = Obat::find()->all();
        return $this->render('index',['view'=>$view]);
    }
    
    public function actionAdd(){
        $forms = new ObatForm();

        if ($forms->load(Yii::$app->request->post()) && $forms->validate())
        {
            $request = Yii::$app->request;

            $obat = new Obat();
            $obat->nama_obat = $request->post('ObatForm')['nama_obat'];
            $obat->cara_pakai = $request->post('ObatForm')['cara_pakai'];
            $obat->harga_obat = $request->post('ObatForm')['harga_obat'];
            $obat->jenis_obat = $request->post('ObatForm')['jenis_obat'];
            $obat->save();

            return $this->redirect(Url::to(['obat/index']));
        }
        else 
        {
            return $this->render('add', ['forms'=>$forms]);

        }
    }


    public function actionEdit($id_obat)
    {
        $forms = new ObatForm();

        if ($forms->load(Yii::$app->request->post()) && $forms->validate())
        {
            $request = Yii::$app->request;

            $obat = Obat::findOne(['id_obat', $id_obat]);
            $obat->nama_obat = $request->post('ObatForm')['nama_obat'];
            $obat->cara_pakai = $request->post('ObatForm')['cara_pakai'];
            $obat->harga_obat = $request->post('ObatForm')['harga_obat'];
            $obat->jenis_obat = $request->post('ObatForm')['jenis_obat'];
            
            if($obat->save()){
                return $this->redirect(Url::to(['obat/index']));
            }

            
        }
        else 
        {
            $obatval = Obat::findOne(['id_obat', $id_obat]);
            return $this->render('edit', ['forms'=>$forms, 'obatval'=>$obatval]);

        }
    }

    public function actionHapus($id_obat)
    {
        $obat = Obat::findOne(['id_obat' => $id_obat]);
        $obat->delete();

        return $this->redirect(Url::to(['obat/index']));
    }

}
