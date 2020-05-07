<?php
namespace ceefee\layui;

class BaseHtml extends \yii\bootstrap\BaseHtml
{
    public static function tag($name, $content = '', $options = [])
    {
        if ($name === null || $name === false) {
            return $content;
        }
        
        switch ($name) {
            case 'input':
                if (in_array($options['type'], ['text', 'password'])) {
                    static::addCssClass($options, 'layui-input');
                }
                break;
            case 'button':
                static::addCssClass($options, 'layui-btn');
                break;
            case 'textarea':
                static::addCssClass($options, 'layui-textarea');
                break;
            default:
                break;
        }
        
        $html = "<$name" . static::renderTagAttributes($options) . '>';
        return isset(static::$voidElements[strtolower($name)]) ? $html : "$html$content</$name>";
    }
}
