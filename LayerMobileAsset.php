<?php

namespace weison\alert;

use yii\web\AssetBundle;

class LayerMobileAsset extends AssetBundle
{
    public $sourcePath = '@vendor/weison-tech/yii2-layer/src/mobile';

    public $js = ['layer.js'];

    public $css = ['need/layer.css'];
}
