<?php
namespace ceefee\layui;

class Button extends Widget
{
    public $tagName = 'button';
    public $label = 'Button';
    public $encodeLabel = true;
    
    public function init()
    {
        parent::init();
        $this->clientOptions = false;
        Html::addCssClass($this->options, ['widget' => 'layui-btn']);
    }
    
    public function run()
    {
        $this->registerPlugin('button');
        return Html::tag($this->tagName, $this->encodeLabel ? Html::encode($this->label) : $this->label, $this->options);
    }
}
