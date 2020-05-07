<?php
namespace ceefee\layui;

use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;

class Progress extends Widget
{
    public $label;
    public $percent = 0;
    public $barOptions = [];
    public $bars;
    
    public function init()
    {
        parent::init();
        Html::addCssClass($this->options, ['widget' => 'layui-progress']);
    }
    
    public function run()
    {
        LayuiAsset::register($this->getView());
        return implode("\n", [
            Html::beginTag('div', $this->options),
            $this->renderProgress(),
            Html::endTag('div')
        ]) . "\n";
    }
    
    protected function renderProgress()
    {
        if (empty($this->bars)) {
            return $this->renderBar($this->percent, $this->label, $this->barOptions);
        }
        $bars = [];
        foreach ($this->bars as $bar) {
            $label = ArrayHelper::getValue($bar, 'label', '');
            if (!isset($bar['percent'])) {
                throw new InvalidConfigException("The 'percent' option is required.");
            }
            $options = ArrayHelper::getValue($bar, 'options', []);
            $bars[] = $this->renderBar($bar['percent'], $label, $options);
        }
        
        return implode("\n", $bars);
    }
    
    protected function renderBar($percent, $label = '', $options = [])
    {
        $defaultOptions = [
            'lay-percent' => "{$percent}%",
            'style' => "width:{$percent}%",
            ];
        $options = array_merge($defaultOptions, $options);
        Html::addCssClass($options, ['widget' => 'layui-progress-bar']);
        
        $out = Html::beginTag('div', $options);
        $out .= $label;
        $out .= Html::endTag('div');
        
        return $out;
    }
}