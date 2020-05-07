<?php
namespace ceefee\layui;

use yii\helpers\ArrayHelper;
use yii\helpers\Url;

class ButtonDropdown extends Widget
{
    public $label = 'Button';
    public $containerOptions = [];
    public $options = [];
    public $dropdown = [];
    public $split = false;
    public $tagName = 'button';
    public $encodeLabel = true;
    public $dropdownClass = 'ceefee\layui\Dropdown';
    
    public function run()
    {
        // @todo use [[options]] instead of [[containerOptions]] and introduce [[buttonOptions]] before 2.1 release
        Html::addCssClass($this->containerOptions, ['widget' => 'layui-btn-group']);
        $options = $this->containerOptions;
        $tag = ArrayHelper::remove($options, 'tag', 'div');
        
        $this->registerPlugin('dropdown');
        return implode("\n", [
            Html::beginTag($tag, $options),
            $this->renderButton(),
            $this->renderDropdown(),
            Html::endTag($tag)
        ]);
    }
    
    protected function renderButton()
    {
        Html::addCssClass($this->options, ['widget' => 'layui-btn']);
        $label = $this->label;
        if ($this->encodeLabel) {
            $label = Html::encode($label);
        }
        
        if ($this->split) {
            $options = $this->options;
            $this->options['data-toggle'] = 'dropdown';
            Html::addCssClass($this->options, ['toggle' => 'dropdown-toggle']);
            unset($options['id']);
            $splitButton = Button::widget([
                'label' => '<span class="caret"></span>',
                'encodeLabel' => false,
                'options' => $this->options,
                'view' => $this->getView(),
            ]);
        } else {
            $label .= ' <span class="caret"></span>';
            $options = $this->options;
            Html::addCssClass($options, ['toggle' => 'dropdown-toggle']);
            $options['data-toggle'] = 'dropdown';
            $splitButton = '';
        }
        
        if (isset($options['href'])) {
            if (is_array($options['href'])) {
                $options['href'] = Url::to($options['href']);
            }
        } else {
            if ($this->tagName === 'a') {
                $options['href'] = '#';
            }
        }
        
        return Button::widget([
            'tagName' => $this->tagName,
            'label' => $label,
            'options' => $options,
            'encodeLabel' => false,
            'view' => $this->getView(),
        ]) . "\n" . $splitButton;
    }
    
    protected function renderDropdown()
    {
        $config = $this->dropdown;
        $config['clientOptions'] = false;
        $config['view'] = $this->getView();
        /** @var Widget $dropdownClass */
        $dropdownClass = $this->dropdownClass;
        return $dropdownClass::widget($config);
    }
}