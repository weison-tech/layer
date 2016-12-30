<?php

namespace weison\alert;

use yii\web\AssetBundle;

class LayerAsset extends AssetBundle
{
    public $sourcePath = '@vendor/weison-tech/yii2-layer/src';

    public $js = ['layer.js'];

    public $css = ['skin/default/layer.css'];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
