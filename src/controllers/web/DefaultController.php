<?php

namespace ukbedeveli\todo\controllers\web;

use portalium\web\Controller as WebController;

class DefaultController extends WebController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionHi($name)
    {
        $welcome = "Hi, welcome " . $name;


        return $this->render('hi',['welcome' => $welcome]);
    }
    //toplama islemini kullanicidan veri girmesi araciligiyla yapiyoruz( calc?a=10&b=5 )
    public function actionCalc($a,$b)
    {
        $total =     $a + $b;


        return $this->render('calc',['total' => $total]);
    }
}