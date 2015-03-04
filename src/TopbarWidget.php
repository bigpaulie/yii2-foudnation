<?php

namespace bigpaulie\foundation\widgets;

use bigpaulie\foundation\Widget;

class TopbarWidget extends Widget{
    
    public $title;
    public $rightItems = [];
    public $leftItems = [];
    
    public function run(){
        $this->render('topbar' , array(
            'title' => $this->title,
            'rightItems' => $this->rightItems,
            'leftItems' => $this->leftItems,
        ));
    }
    
}
