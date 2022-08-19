<?php

namespace frontend\controllers;

use frontend\models\Category;

class ProductionsController extends AppController
{
    public function actionIndex()
    {
        $categories = Category::find()->asArray()->all();
        return $this->render('index', compact('categories'));
    }

    public function actionCategory($id)
    {
        return $this->render('category', compact('id'));
    }

    public function actionView($id)
    {
        return $this->render('view', compact('id'));
    }

}