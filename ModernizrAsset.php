<?php

namespace bigpaulie\foundation;

use yii2\web\AssetBundle;
use yii2\web\View;

class ModernizrAsset extends AssetBundle {
    
    public $js = [
        'js/vendor/modernizr.js',
    ];
    
    public $jsOptions = ['position' => View::POS_HEAD];
    
}
