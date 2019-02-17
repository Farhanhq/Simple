<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Companies;

/* @var $this yii\web\View */
/* @var $model backend\models\branches */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="branches-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'companies_company_id')->dropDownList(
            ArrayHelper::map(Companies::find()->all(),'company_id','company_name'),
            ['prompt' => 'Select Company' ]

    ) ?>

    <?= $form->field($model, 'branch_name')->textInput() ?>

    <?= $form->field($model, 'branch_address')->textInput(['placeholder'=>'username']) ?>

    <?= $form->field($model, 'branch_created_date')->textInput() ?>

    <?= $form->field($model, 'branch_status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
