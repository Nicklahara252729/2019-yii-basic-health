<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;

$this->title =" Sistem Informasi Rawat Inap Puskesmas | Tambah Data Obat";

?>
 <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Tambah Data Obat</h2>
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
            <?= $form->field($forms, 'nama_obat'); ?>
            </div>
        </div>
        <div class="item form-group">
            <div class="col-lg-8 offset-2">
            <?= $form->field($forms, 'cara_pakai')->TextArea(); ?>
            </div>
        </div>
        <div class="item form-group">
            <div class="col-lg-8 offset-2">
            <?= $form->field($forms, 'harga_obat'); ?>
            </div>
        </div>
        <div class="item form-group">
            <div class="col-lg-8 offset-2">
            <?= $form->field($forms, 'jenis_obat'); ?>
            </div>
        </div>
        
        <div class="ln_solid"></div>
        <div class="item form-group">
            <div class="col-lg-8 offset-2">
            <?= Html::a('Batal', ['obat/index'],['class'=>'btn btn-danger']) ?>
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
          