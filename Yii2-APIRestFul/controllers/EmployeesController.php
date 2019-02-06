<?php

namespace app\controllers;

use yii\rest\ActiveController;
use yii\web\Response;

class EmployeesController extends ActiveController
{

    public $modelClass = "app\models\Employee";

    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvolope' => 'data'
    ];

    public function behaviors(){

        $b = parent::behaviors();
        $b['contentNegotiator']['formats']['text/html'] = Response::FORMAT_HTML;
        return $b;
    }

}
