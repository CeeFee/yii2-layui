<?php
namespace ceefee\layui;

use yii\helpers\Json;

trait LayuiWidgetTrait
{
    public $clientOptions = [];
    public $clientEvents = [];
    
    public function init()
    {
        parent::init();
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
    }
    
    protected function registerPlugin($name)
    {
        $view = $this->getView();
        
        LayuiPluginAsset::register($view);
        
        $id = $this->options['id'];
        
        if ($this->clientOptions !== false) {
            $options = empty($this->clientOptions) ? '' : Json::htmlEncode($this->clientOptions);
            $js = "jQuery('#$id').$name($options);";
            $view->registerJs($js);
        }
        
        $this->registerClientEvents();
    }
    
    protected function registerClientEvents()
    {
        if (!empty($this->clientEvents)) {
            $id = $this->options['id'];
            $js = [];
            foreach ($this->clientEvents as $event => $handler) {
                $js[] = "jQuery('#$id').on('$event', $handler);";
            }
            $this->getView()->registerJs(implode("\n", $js));
        }
    }
    
    abstract function getView();
}