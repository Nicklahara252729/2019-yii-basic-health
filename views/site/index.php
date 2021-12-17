<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'Sistem Informasi Rawat Inap Puskesmas | Masuk ';
?>
<div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
          <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-12\">{input}</div>\n<div class=\"col-md-12\">{error}</div>",
        ],
    ]); ?>
              <h1>Sistem Informasi <br>Rawat Inap Puskesmas</h1>
              <?= $form->field($model, 'username')->textInput(['autofocus' => true,'class'=>'form-control']) ?>
              <?= $form->field($model, 'password')->passwordInput(['class'=>'form-control']) ?>
              <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"col-lg-12\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?>
              <?= Html::submitButton('Masuk ke Sistem', ['class' => 'btn btn-primary submit', 'name' => 'login-button']) ?>
              <div class="clearfix"></div>
              <div class="separator">
                <div class="clearfix"></div>
                <br />
              </div>
              <?php ActiveForm::end(); ?>
          </section>
        </div>
      </div>

