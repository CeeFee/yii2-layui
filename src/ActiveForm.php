<?php
namespace ceefee\layui;

class ActiveForm extends \yii\widgets\ActiveForm
{
    public $fieldClass = 'ceefee\layui\ActiveField';
    public $options = [
        'autocomplete' => 'off',
		'class' => 'layui-form',
	];
    public $layout = 'default';
    
    public function init()
    {
        Html::addCssClass($this->options, 'layui-form');
        parent::init();
    }
    
    public function field($model, $attribute, $options = [])
    {
        return parent::field($model, $attribute, $options);
    }
}