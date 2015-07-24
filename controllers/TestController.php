<?php

namespace ddavydov\controllers;

use yii\helpers\VarDumper;
use yii\web\Controller;

class TestController extends Controller
{
  /**
   * @inheritDoc
   */
  public function __construct($id, $module, $config = [])
  {
    parent::__construct($id, $module, $config);
  }


  public function actionTest()
  {
    VarDumper::dump($this, 10, true);
  }
}