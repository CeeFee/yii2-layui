<?php
namespace ceefee\layui;

use yii\web\AssetBundle;

class LayuiPluginAsset extends AssetBundle
{
    public $sourcePath = '@bower/layui/dist';
    public $js = [
        'layui.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'ceefee\layui\LayuiAsset',
    ];
}