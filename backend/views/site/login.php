<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="login-box"> 
    <div class="login-logo"> </div>

    <p>Please fill out the following fields to login:</p>

    <div class="login-box-body">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <?= $form->field($model, 'username',['options'=>[
                    'tags'=>'div',
                    'class'=> 'form-group field-loginform-username has-feedback required'
             ],
             'template'=>'{input}<span class="glyphicon glyphicon-user form-control-feedback"></span>{error}{hint}'

            ])->textInput(['autofocus' => true,'placeholder'=>'username']) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
       
    </div>
</div>
</div>

