<?php

namespace bigpaulie\foundation;

use yii\helpers\Json;
use yii\web\View;

class Widget extends yii\base\Widget {

    public $clientOptions = [];

    public function init() {
        parent::init();
    }

    public function registerOptions() {
        $view = $this->getView();
        $view->registerJs('$(document).foundation('
                . Json::encode($this->clientOptions) . ');', View::POS_END);
    }

}
