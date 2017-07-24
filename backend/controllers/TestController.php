<?php
/**
 * Created by PhpStorm.
 * User: lizhen
 * Date: 2017/7/24
 * Time: 14:59
 */
namespace backend\controllers;

use Yii;
use yii\web\Controller;

class TestController extends Controller
{

    public function actionTest1()
    {
        $dollar = new \backend\models\Dollar(5);
        $franc = new \backend\models\Franc(10);


        var_dump(get_class($dollar));
        var_dump(get_parent_class($dollar));
    }

}