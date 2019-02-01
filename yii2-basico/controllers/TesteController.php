<?php

namespace app\controllers;

class TesteController extends \yii\web\Controller
{
    public function actionIndex($id = 500)
    {
        $request = \Yii::$app->request;

        $xpto = $request->get('xpto');
        return $this->render('index', [
            'id' => $id,
            'xpto' => $xpto
        ]);
    }

    public function actionMaisParametros($id,$name){
        echo "$id - $name";die();
        
    }

}
