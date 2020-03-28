<?php

namespace app\modules\v1\controllers;

use yii\web\Controller;

/**
 * Default controller for the `v1` module
 */
class UserController extends Controller
{

    /**
     * @SWG\Get(path="/users",
     *     tags={"user"},
     *     summary="获取用户列表",
     *     description="测试直接返回一个array",
     *     produces={"application/json"},
     *     @SWG\Parameter(in = "query",name = "access_token",description = "access token",required = true,type = "string"),
     *     @SWG\Response(
     *         response = 200,
     *         description = " success"
     *     )
     * )
     *
     */
    public function actionIndex()
    {
        $res = "{'code':1000, 'message':'你好'}";
        return $res;
    }
}
