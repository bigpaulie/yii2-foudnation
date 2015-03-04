<?php

namespace bigpaulie\foundation;
use \yii\base\Widget;

class Widget extends Widget{
    
    private $_plugins = [];
    
    public function init(){
        parent::init();
        $view = $this->getView();
        $view->registerJs("$(document).foundation();");
    }
    
}
