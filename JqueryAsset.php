<?php

namespace bigpaulie\foundation;

use \yii\web\AssetBundle;
use \yii\web\View;

class JqueryAsset extends AssetBundle {

    public $sourcePath = '@bower/jquery';
    public $js = [
        'jquery.min.js'
    ];
    public $jsOptions = ['position' => View::POS_END];

}
