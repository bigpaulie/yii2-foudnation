<?php

namespace bigpaulie\foundation\widgets;

use bigpaulie\foundation\Widget;

class Topbar extends Widget {

    public $items = [];
    public $title;
    public $titleLink;

    public function run() {
        return $this->render('topbar', [
                    'items' => $this->items,
                    'title' => $this->title,
                    'titleLink' => $this->titleLink
        ]);
    }

}
