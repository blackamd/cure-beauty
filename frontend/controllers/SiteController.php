<?php   

namespace frontend\controllers;

use Yii;
use yii\web\Controller;


/**
 * Site controller
 */
class SiteController extends Controller
{
    public function beforeAction($action)
    {
        Yii::$app->controller->enableCsrfValidation = false;
        return true;
    }
    public function actionIndex()
    {
        print_r("Hi");
        exit();
       return $this->render('index');
    }
}
