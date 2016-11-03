<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        

    ];
    public $js = [
    
        'https://code.jquery.com/ui/1.12.1/jquery-ui.js',
        'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.1.1/js/mdb.min.js',
        // 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js',
       
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}


