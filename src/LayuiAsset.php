<?php
namespace ceefee\layui;

use yii\web\AssetBundle;

class LayuiAsset extends AssetBundle
{
    public $sourcePath = '@vendor/ceefee/yii2-layui/layui';
    public $css = [
        'css/layui.css'
    ];
}