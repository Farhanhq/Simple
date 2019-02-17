<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class DashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/ionicons.min.css',
        'css/AdminLTE.min.css',
        'css/_all-skins.min.css',
        'css/blue.css',
        'css/font-awesome.min.css',
        'css/site.css',
    ];
    public $js = [
    	'js/jquery.min.js',
    	'js/moment.min.js',
    	'js/bootstrap3-wysihtml5.all.min.js',
    	'js/jquery-ui.min.js',
    	'js/raphael.min.js',
    	'js/jquery.sparkline.min.js',
    	'js/fastclick.js',
    	'js/dashboard.js',
    	'js/adminlte.min.js',
    	'js/bootstrap.min.js',
    	
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
