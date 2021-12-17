<?php use yii\helpers\Html; ?>
<div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="assets/images/user.jpg" alt=""><?= Yii::$app->user->identity->username; ?>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                  <?php echo Html::beginForm(['/site/logout'], 'post');
                 echo Html::submitButton(
                    'Logout',
                    ['class' => 'btn btn-link logout form-control']
                 );
                echo Html::endForm();
                ?>
                    
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->