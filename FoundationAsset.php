<?php

namespace bigpaulie\foundation;

use \yii\web\AssetBundle;
use \yii\web\View;

class FoundationAsset extends AssetBundle {

    public $sourcePath = '@bower/foundation';
    public $css = [
        'css/normalize.css',
        'css/foundation.min.css',
    ];
    public $js = [
        'js/foundation.min.js',
    ];
    public $depends = [
        'bigpaulie\foundation\ModernizrAsset',
        'bigpaulie\foundation\JqueryAsset',
    ];

}
