<?php
/**
 * Created by PhpStorm.
 * User: kostik
 * Date: 23.06.2016
 * Time: 4:41
 */
namespace console\controllers;

use Yii;
use yii\console\Controller;
/**
 * ������������� RBAC ����������� � ������� php yii rbac/init
 */
class RbacController extends Controller {

    public function actionInit() {
        $auth = Yii::$app->authManager;

        $auth->removeAll();
        $admin = $auth->createRole('admin');

        $auth->add($admin);



        $viewAdminPage = $auth->createPermission('viewAdminPage');
        $viewAdminPage->description = '�������� �������';




        $auth->add($viewAdminPage);




        $auth->assign($admin, 1);


    }
}