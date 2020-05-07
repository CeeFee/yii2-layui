<?php
namespace ceefee\layui;

use yii\helpers\ArrayHelper;

class ActiveField extends \yii\bootstrap\ActiveField
{
    public $options = ['class' => 'layui-form-item'];
    public $inputOptions = ['class' => 'layui-input'];
    public $labelOptions = ['class' => 'layui-form-label'];
    
    public function __construct($config = [])
    {
        $config = ArrayHelper::merge([
            'options' => $this->options,
            'inputOptions' => $this->inputOptions,
            'labelOptions' => $this->labelOptions,
        ], $config);
        parent::__construct($config);
    }
}