Alert Widget for Yii 2
======================
Alert widget based on [SweetAlert](http://t4t5.github.io/sweetalert/)

[![Latest Stable Version](https://poser.pugx.org/yii2mod/yii2-sweet-alert/v/stable)](https://packagist.org/packages/yii2mod/yii2-sweet-alert) [![Total Downloads](https://poser.pugx.org/yii2mod/yii2-sweet-alert/downloads)](https://packagist.org/packages/yii2mod/yii2-sweet-alert) [![License](https://poser.pugx.org/yii2mod/yii2-sweet-alert/license)](https://packagist.org/packages/yii2mod/yii2-sweet-alert)
[![Build Status](https://travis-ci.org/yii2mod/yii2-sweet-alert.svg?branch=master)](https://travis-ci.org/yii2mod/yii2-sweet-alert)

Installation 
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist weison-tech/yii2-layer "*"
```

or add

```json
"weison-tech/yii2-layer": "*"
```

to the require section of your composer.json.

Usage
-------

**For render the message from session flash you can use the following code:**

1) Set the message in your action, for example:

```php
Yii::$app->session->setFlash('success', 'This is the message');
```

2) Simply add widget to your page as follows:
```php
echo Alert::widget();
```