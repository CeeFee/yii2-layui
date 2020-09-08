<?php
namespace ceefee\layui;

use yii\helpers\ArrayHelper;

class ActiveField extends \yii\bootstrap\ActiveField
{
    public $options = ['class' => 'layui-form-item'];
    public $inputOptions = ['class' => 'layui-input'];
    public $labelOptions = ['class' => 'layui-form-label'];
    public $hintOptions = ['class' => 'layui-input-block help-block hint-block'];
    public $errorOptions = ['class' => 'layui-input-block help-block help-block-error'];
    
    public function __construct($config = [])
    {
        $config = ArrayHelper::merge([
            'options' => $this->options,
            'inputOptions' => $this->inputOptions,
            'labelOptions' => $this->labelOptions,
            'hintOptions' => $this->hintOptions,
            'errorOptions' => $this->errorOptions,
            'inputTemplate' => '<div class="layui-input-block">{input}</div>',
            'checkboxTemplate' => "{beginLabel}\n{labelTitle}\n{endLabel}\n{input}\n{error}\n{hint}",
        ], $config);
        parent::__construct($config);
    }
}