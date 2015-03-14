<?php
  
namespace bigpaulie\foundation;

use yii\web\AssetBundle;
use yii\web\View;

class FoundationAsset extends AssetBundle{
    
    public $sourcePath = "@vendor/bigpaulie/yii2-foundation/foundation";
    
    public $css = [
        'css/normalize.css',
        'css/foundation.min.css',
    ];
    
    public $js = [
        'js/foundation.min.js',
    ];
    
    public $jsOptions = ['position' => View::POS_END];
    
    public $depends = [
        'bigpaulie\foundation\ModernizrAsset',
        'bigpaulie\foundation\JqueryAsset',
    ];
    
    public function init(){
        parent::init();
    }
    
}
