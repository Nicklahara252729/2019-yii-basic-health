<?php

namespace app\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\Url;

use app\models\Pasien;
use app\models\PasienForm;
use app\models\Registrasi;
use app\models\RegistrasiForm;
use app\models\Pemeriksaan;

class DashboardController extends Controller
{
    public function init(){
    parent::init();
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }
    }

    
    public function actionIndex()
    {
        $pasienforms = new PasienForm();
        $registrasiforms = new RegistrasiForm();

        if ($pasienforms->load(Yii::$app->request->post()) && $pasienforms->validate())
        {
            $pasienrequest = Yii::$app->request;

            $Pasien = new Pasien();
            $Pasien->nama_pasien = $pasienrequest->post('PasienForm')['nama_pasien'];
            $Pasien->tgl_lahir = $pasienrequest->post('PasienForm')['tgl_lahir'];
            $Pasien->jenkel = $pasienrequest->post('PasienForm')['jenkel'];
            $Pasien->alamat = $pasienrequest->post('PasienForm')['alamat'];
            $Pasien->notelp = $pasienrequest->post('PasienForm')['notelp'];
            $Pasien->save();

            return $this->redirect(Url::to(['dashboard/index']));
        }else if($registrasiforms->load(Yii::$app->request->post()) && $registrasiforms->validate()){
            $regisrequest = Yii::$app->request;

            $Registrasi = new Registrasi();
            $Registrasi->no_registrasi = $regisrequest->post('RegistrasiForm')['no_registrasi'];
            $Registrasi->id_pasien = $regisrequest->post('RegistrasiForm')['id_pasien'];
            $Registrasi->tgl_registrasi = $regisrequest->post('RegistrasiForm')['tgl_registrasi'];
            $Registrasi->save();

            return $this->redirect(Url::to(['dashboard/index']));
        }
        else 
        {
            return $this->render('index', ['pasienforms'=>$pasienforms,'registrasiforms'=>$registrasiforms]);

        }
    }

}
