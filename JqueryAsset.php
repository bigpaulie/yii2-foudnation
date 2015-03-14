<?php

namespace bigpaulie\foundation;

use yii\web\AssetBundle;
use yii2\web\View;

class JqueryAsset extends AssetBundle{
    
    public $js = [
        '//code.jquery.com/jquery-latest.min.js',
    ];
    
    public $jsOptions = ['position' => View::POS_END];
    
}
