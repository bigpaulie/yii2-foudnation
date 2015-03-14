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
        
    ];
    
    public function init(){
        parent::init();
        $view = $this->getView();
        $view->registerJs("$(document).foundation();" , View::POS_END);
    }
    
}
