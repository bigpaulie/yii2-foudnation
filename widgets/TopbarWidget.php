<?php

namespace bigpaulie\foundation\widgets;

use bigpaulie\foundation\Widget;

class TopbarWidget extends Widget{
    
    public $title;
    public $titleLink;
    public $items;
    public $clientOptions;
    
    public function run(){
        return $this->render('topbar' , [
            'title' => $this->title,
            'title_link' => $this->titleLink,
            'items' => $this->items,
        ]);
    }
    
}
