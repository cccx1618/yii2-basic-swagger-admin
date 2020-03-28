<?php

return [
  'swagger'=>'swagger/doc',
  'swagger/<action:[\w-]+>' => 'swagger/<action>',
  
  [
    'class' => 'yii\rest\UrlRule',
    'controller' => 'v1/user',
    'extraPatterns' => [
        'GET users' => 'users',
        'OPTIONS users' => 'options',
    ]
  ],

];