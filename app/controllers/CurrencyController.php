<?php

namespace app\controllers;

use Yii;
use app\models\Currency;
use app\models\CurrencySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\rest\ActiveController;

/**
 * CurrencyController implements the CRUD actions for Currency model.
 */
class CurrencyController extends ActiveController
{

    public $modelClass = 'app\models\Currency';


}
