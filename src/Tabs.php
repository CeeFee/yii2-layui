<?php
namespace ceefee\layui;

class Tabs extends \yii\bootstrap\Tabs
{
    public $dropdownClass = 'ceefee\layui\Dropdown';
    
    public function init()
    {
        parent::init();
    }
}