<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class UserCreateForm extends Component
{

    public $action;

    public function __construct($action)
    {
        $this->action = $action;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.user-create-form');
    }
}
