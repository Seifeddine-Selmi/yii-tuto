<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

  if(Yii::$app->session->hasFlash('success')){

      echo '<div class="alert alert-success">' . Yii::$app->session->getFlash('success') . '</div>';
  }
?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'username') ?>
<?= $form->field($model, 'name')->label('Your Name') ?>
<?= $form->field($model, 'email')->label('Your Email') ?>


    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>