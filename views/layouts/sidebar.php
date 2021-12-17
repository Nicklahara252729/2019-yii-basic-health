<?php 
use yii\helpers\Html; 
use yii\helpers\Url;?>
<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?= Url::toRoute('/blog'); ?>" class="site_title"><i class="fa fa-dashboard"></i> <span>Puskesmas</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="assets/images/user.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2><?= Yii::$app->user->identity->username; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                  <li><a href="<?= Url::toRoute('/'); ?>"><i class="fa fa-home"></i> Beranda </a></li>
                  <li><a href="<?= Url::toRoute('/administrasi'); ?>"><i class="fa fa-book"></i> Administrasi </a></li>
                  <li><a href="<?= Url::toRoute('/registasi'); ?>"><i class="fa fa-file-text-o"></i> Registrasi </a></li>
                  <li><a href="<?= Url::toRoute('/pemeriksaan'); ?>"><i class="fa fa-stethoscope"></i> Pemeriksaan </a></li>
                  <li><a href="<?= Url::toRoute('/pasien/data'); ?>"><i class="fa fa-users"></i> Pasien </a></li>
                  <li><a href="<?= Url::toRoute('/dokter'); ?>"><i class="fa fa-user-md"></i> Dokter </a></li>
                  <li><a href="<?= Url::toRoute('/obat'); ?>"><i class="fa fa-medkit"></i> Obat </a></li>
                  <li><a><i class="fa fa-users"></i>Rawat Inap <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= Url::toRoute('/rawatinap/masuk'); ?>">Pasien Masuk </a></li>
                      <li><a href="<?= Url::toRoute('/rawatinap/keluar'); ?>">Pasien Keluar</a></li>
                    </ul>
                  </li>
                  <li>
                  <?php echo Html::beginForm(['/site/logout'], 'post');
                 echo Html::submitButton(
                    'Keluar',
                    ['class' => 'btn btn-primary btn-sm','style'=> 'margin-left:10px;width:90%;']
                 );
                echo Html::endForm();
                ?></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

          
          </div>
        </div>