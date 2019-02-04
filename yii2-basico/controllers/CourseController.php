<?php

namespace app\controllers;

use app\models\Course;

class CourseController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $courses = Course::find()->all();
        return $this->render('index', [
            'courses' => $courses
        ]);
    }

    public function actionCreate()
    {
        $request = \Yii::$app->request;
        if($request->isPost){
            $model = new Course();
            $model->attributes = $request->post();
            $model->save();
            return $this->redirect(['course/index']);
        }
        return $this->render('create');
    }

    public function actionDelete()
    {
        return $this->render('delete');
    }

    public function actionUpdate()
    {
        return $this->render('update');
    }

}
