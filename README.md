Alert Widget for Yii 2
======================
Alert widget based on [layer](https://github.com/sentsin/layer)


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
-----
Update your AppAsset

````
<?php

namespace app\assets; 
  
use yii\web\AssetBundle;
  
class AppAsset extends AssetBundle
{
    ...
    public $depends = [
        ...
        'weison\alert\LayerAsset', // Import layer alert's js and css
        ...
    ];
    ...
}
````
