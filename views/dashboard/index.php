<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;

$this->title =" Sistem Informasi Rawat Inap Puskesmas | Dashboard";

?>
 <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-6 col-sm-12 ">
                <div class="row">
                    <div class="animated flipInY col-lg-6 col-md-6 col-sm-6  ">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                          </div>
                          <div class="count">179</div>
                          <p>Lorem ipsum psdea itgum rixt.</p>
                        </div>
                    </div>

                    <div class="animated flipInY col-lg-6 col-md-6 col-sm-6  ">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                          </div>
                          <div class="count">179</div>
                          <p>Lorem ipsum psdea itgum rixt.</p>
                        </div>
                    </div>

                    <div class="animated flipInY col-lg-6 col-md-6 col-sm-6  ">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                          </div>
                          <div class="count">179</div>
                          <p>Lorem ipsum psdea itgum rixt.</p>
                        </div>
                    </div>

                    <div class="animated flipInY col-lg-6 col-md-6 col-sm-6  ">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                          </div>
                          <div class="count">179</div>
                          <p>Lorem ipsum psdea itgum rixt.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2> Registrasi baru</h2>
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
                                                    'id' => 'pasien_form',
                                                    'options' => ['class' => 'form-horizontal form-label-left']
                                                ])
                                            ?>

                                            <div class="item form-group">
                                                <div class="col-lg-12 ">
                                                <?= $form->field($registrasiforms, 'no_registrasi'); ?>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <div class="col-lg-12 ">
                                                <?= $form->field($registrasiforms, 'id_pasien'); ?>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <div class="col-lg-12 ">
                                                <?= $form->field($registrasiforms, 'tgl_registrasi'); ?>
                                                </div>
                                            </div>
                                            
                                            <div class="ln_solid"></div>
                                            <div class="item form-group">
                                                <div class="col-lg-12 ">
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

            <div class="col-md-6 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Tambah data pasien</h2>
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
                                        'id' => 'pasien_form',
                                        'options' => ['class' => 'form-horizontal form-label-left']
                                    ])
                                ?>

                                <div class="item form-group">
                                    <div class="col-lg-12 ">
                                    <?= $form->field($pasienforms, 'nama_pasien'); ?>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <div class="col-lg-12 ">
                                    <?= $form->field($pasienforms, 'tgl_lahir')->textInput(['type'=>'date']); ?>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <div class="col-lg-12 ">
                                    <?= $form->field($pasienforms, 'jenkel')->dropDownList(['laki-laki'=>'laki-laki','perempuan'=>'perempuan']); ?>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <div class="col-lg-12 ">
                                    <?= $form->field($pasienforms, 'alamat')->TextArea(); ?>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <div class="col-lg-12 ">
                                    <?= $form->field($pasienforms, 'notelp'); ?>
                                    </div>
                                </div>
                                
                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="col-lg-12 ">
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

        <div class="row">
            <div class="col-md-6 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Registrasi hari ini</h2>
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
                                <div class="card-box table-responsive">
                                    <table id="registrasi-table" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                            <th>No</th>
                                            <th>Nomor Registrasi</th>
                                            <th>Nama Pasien</th>
                                            <th>Tanggal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                     </div>
                  </div>

                </div>
            </div>

            <div class="col-md-6 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Pemeriksaan hari ini</h2>
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
                                <div class="card-box table-responsive">
                                    <table id="pasien-table" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                            <th>No Registasi</th>
                                            <th>Nama Pasien</th>
                                            <th>Dokter</th>
                                            <th>Tanggal</th>
                                            <th>Status</th>
                                            <th>Rawat Inap</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                     </div>
                  </div>

                </div>
            </div>
        </div>

</div>
          