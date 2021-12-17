<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title =" Sistem Informasi Rawat Inap Puskesmas | Data Pasien";
?>
 <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Data Dokter</h2>
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
                            <?= Html::a('<i class="fa fa-plus"></i> Tambah Dokter Baru', ['dokter/add'],['class'=>'btn btn-primary']) ?>
                                <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                        <th>Nama Dokter</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Nomor Telepon</th>
                                        <th>Spesialis</th>
                                        <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($view as $key => $views) : ?>
                                        <tr>
                                        <td><?= $key+1; ?></td>
                                        <td><?= $views->nama_dokter; ?></td>    
                                        <td><?= $views->jenkel; ?></td>
                                        <td><?= $views->alamat; ?></td>
                                        <td><?= $views->no_telp; ?></td>
                                        <td><?= $views->spesialis; ?></td>
                                        <td>
                                            <?= Html::a('<i class="fa fa-edit"></i> Edit', ['dokter/edit','id_dokter'=>$views->id_dokter  ],['class'=>'btn btn-warning btn-sm']) ?>
                                            <?= Html::a('<i class="fa fa-trash"></i> Hapus', ['dokter/hapus','id_dokter'=>$views->id_dokter],['class'=>'btn btn-danger btn-sm','onclick'=>"return confirm('Apakah anda yakin ingin menghapus data ini ?')"]) ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                        
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
          