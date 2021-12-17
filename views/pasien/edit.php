<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;

$this->title =" Sistem Informasi Rawat Inap Puskesmas | Edit Data Obat";

?>
<div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Edit Data Obat</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box">
                            <?php $form = ActiveForm::begin([
                'id' => 'obat_form',
                'options' => ['class' => 'form-horizontal form-label-left']
            ])
        ?>

<div class="item form-group">
            <div class="col-lg-8 offset-2">
            <?= $form->field($forms, 'nama_pasien')->textInput(['value'=>$pasienval->nama_pasien]); ?>
            </div>
        </div>
        <div class="item form-group">
            <div class="col-lg-8 offset-2">
            <?= $form->field($forms, 'tgl_lahir')->textInput(['type'=>'date','value'=>$pasienval->tgl_lahir]); ?>
            </div>
        </div>
        <div class="item form-group">
            <div class="col-lg-8 offset-2">
            <?= $form->field($forms, 'jenkel')->dropDownList(['laki-laki'=>'laki-laki','perempuan'=>'perempuan']); ?>
            </div>
        </div>
        <div class="item form-group">
            <div class="col-lg-8 offset-2">
            <?= $form->field($forms, 'alamat')->TextArea(['value'=>$pasienval->alamat]); ?>
            </div>
        </div>
        <div class="item form-group">
            <div class="col-lg-8 offset-2">
            <?= $form->field($forms, 'notelp')->textInput(['value'=>$pasienval->notelp]); ?>
            </div>
        </div>
        
        <div class="ln_solid"></div>
        <div class="item form-group">
            <div class="col-lg-8 offset-2">
            <?= Html::a('Batal', ['pasien/data'],['class'=>'btn btn-danger']) ?>
						  <button class="btn btn-warning" type="reset">Reset</button>
                <?= Html::submitButton('Simpan', ['class' => 'btn btn-primary']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>

                            </div>
                          </div>
                      </div>
                  </div>

                </div>
            </div>
        </div>
</div>