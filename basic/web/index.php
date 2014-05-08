<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
function pr($val,$fl=''){
    echo '<pre>';print_r($val);echo '</pre>';
    if(isset($fl) and $fl !=''){
        exit;
    }
}
$config = require(__DIR__ . '/../config/web.php');

(new yii\web\Application($config))->run();
