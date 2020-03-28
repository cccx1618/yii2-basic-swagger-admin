<?php
namespace app\controllers;

use Yii;

use yii\web\Controller;

class SwaggerController extends Controller
{
    public function actions()
    {
      return [
        'doc' => [
          'class' => 'light\swagger\SwaggerAction',
          'restUrl' => \yii\helpers\Url::to(['/swagger/api'], true),
        ],
        'api' => [
            'class' => 'light\swagger\SwaggerApiAction',
            'scanDir' => [
                Yii::getAlias('@app/modules/v1/controllers'),
                //Yii::getAlias('@app/modules/v1/models'),
            ],
            //'api_key' => 'test'
        ],
      ];
    }
}