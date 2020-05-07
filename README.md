<p align="center">
    <h1 align="center">Layui Extension for Yii 2</h1>
    <br>
</p>

This is the Layui extension for [Yii framework 2.0](http://www.yiiframework.com). It encapsulates [Layui](https://www.layui.com/) components
and plugins in terms of Yii widgets, and thus makes using Layui components/plugins
in Yii applications extremely easy.

For license information check the [LICENSE](LICENSE.md)-file.

[![Latest Stable Version](https://poser.pugx.org/ceefee/yii2-layui/v/stable.png)](https://packagist.org/packages/ceefee/yii2-layui)
[![Total Downloads](https://poser.pugx.org/ceefee/yii2-layui/downloads.png)](https://packagist.org/packages/ceefee/yii2-layui)


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist ceefee/yii2-layui
```

or add

```
"ceefee/yii2-layui": "~1.0.0"
```

to the require section of your `composer.json` file.

Usage
----

For example, the following
single line of code in a view file would render a Layui Progress plugin:

```php
<?= ceefee\layui\Progress::widget(['percent' => 60, 'label' => 'test']) ?>
```
