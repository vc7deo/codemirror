<?php
namespace vc7deo\codemirror;

use yii\base\Exception;
use yii\web\AssetBundle;


class CodeMirrorAsset extends AssetBundle
{
    public $sourcePath = '@vendor/vc7deo/codemirror';
    public $css = [
        'css/codemirror.css',
        'css/style.min.css'
    ];
    public $js = [
        'js/codemirror.js',
        'js/clike.js',
        'js/css.js',
        'js/javascript.js',
        'js/php.js',
        'js/xml.js',
        'js/jstree.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
