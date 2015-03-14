<?php

namespace bigpaulie\foundation\widgets;

use bigpaulie\foundation\Widget;

/**
 * Topbar Widget 
 * @todo add has-form, fixed and contain-to-grid options
 * @author Paul Purcel <bigpaulie25ro@yahoo.com>
 */
class Topbar extends Widget {

    public $items = [];
    public $lable;
    public $link;

    public function run() {
        $this->registerOptions();
        return $this->render('topbar', [
                    'items' => $this->items,
                    'lable' => $this->lable,
                    'link' => $this->link
        ]);
    }

}
