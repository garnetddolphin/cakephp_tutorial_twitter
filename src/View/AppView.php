<?php

namespace App\View;

use Cake\View\View;
use BootstrapUI\View\UIView;


class AppView extends UIView
{
		public $layout = 'BootstrapUI.default';
    public function initialize()
    {
        parent::initialize();
        $this->loadHelper('MyUtil');
        $this->loadHelper('Html', ['className' => 'BootstrapUI.Html']);
        $this->loadHelper('Form', ['className' => 'BootstrapUI.Form']);
        $this->loadHelper('Flash', ['className' => 'BootstrapUI.Flash']);
        $this->loadHelper('Paginator', ['className' => 'BootstrapUI.Paginator']);
    }
}
