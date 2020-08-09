<?php
namespace ceefee\layui;

use yii\web\AssetBundle;

class LayuiAllPluginAsset extends AssetBundle
{
    public $sourcePath = '@vendor/ceefee/yii2-layui/layui';
    public $js = [
        'layui.all.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'ceefee\layui\LayuiAsset',
    ];
}