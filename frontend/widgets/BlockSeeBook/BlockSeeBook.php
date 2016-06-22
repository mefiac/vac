<?php
/**
 * Created by PhpStorm.
 * User: kostik
 * Date: 23.06.2016
 * Time: 1:29
 */
namespace frontend\widgets\BlockSeeBook;

use yii\base\Widget;

class BlockSeeBook extends Widget{
    public $model;
    public function init(){
        parent::init();
    }

    public function run(){

        return $this->render( 'index', [] );

    }

}