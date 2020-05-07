<?php
namespace ceefee\layui;

class Nav extends \yii\bootstrap\Nav
{
    public $dropdownClass = 'ceefee\layui\Dropdown';
    
    public function init()
    {
        parent::init();
    }
}