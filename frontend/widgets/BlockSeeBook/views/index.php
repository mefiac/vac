<?php
/**
 * Created by PhpStorm.
 * User: kostik
 * Date: 23.06.2016
 * Time: 1:32
 */
use yii\widgets\Pjax;
use yii\helpers\Html;

Pjax::begin();
Html::a("Скачать", ['book/sendmail'], ['class' => 'btn btn-lg btn-primary'])
Pjax::end(); 