<?php

namespace bigpaulie\foundation;

use yii\web\AssetBundle;
use yii\web\View;

class ModernizrAsset extends AssetBundle {
    
    public $js = [
        'js/vendor/modernizr.js',
    ];
    
    public $jsOptions = ['position' => View::POS_HEAD];
    
}
