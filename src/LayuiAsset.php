<?php
namespace ceefee\layui;

use yii\web\AssetBundle;

class LayuiAsset extends AssetBundle
{
    public $sourcePath = '@bower/layui/dist';
    public $css = [
        'css/layui.css'
    ];
}