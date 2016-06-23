<?php
/**
 * Created by PhpStorm.
 * User: kostik
 * Date: 23.06.2016
 * Time: 12:52
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;
use yii\helpers\ArrayHelper;

?>
<?php $form = ActiveForm::begin(); ?>
<?= Html::dropDownList('category', null,
    ArrayHelper::map($category, 'id', 'title'), [
        'id' => 'id_cat', 'class' => "form-control"]) ?>
<?= Html::dropDownList('book', null,
    ArrayHelper::map($books, 'id', 'title'), ['multiple' => 'true',
        'id' => 'id_book', 'class' => "form-control"]) ?>
<?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
<?php ActiveForm::end(); ?>
