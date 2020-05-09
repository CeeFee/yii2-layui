<?php
namespace ceefee\layui;

use yii\web\AssetBundle;

class LayuiPluginAsset extends AssetBundle
{
    public $sourcePath = '@vendor/ceefee/yii2-layui/layui';
    public $js = [
        'layui.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'ceefee\layui\LayuiAsset',
    ];
}