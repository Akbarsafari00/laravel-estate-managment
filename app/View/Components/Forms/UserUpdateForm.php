<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;
use Spatie\Permission\Models\Role;

class UserUpdateForm extends Component
{

    public $action;
    public $user;
    public $info;

    /**
     * @param $action
     * @param $user
     * @param $info
     */
    public function __construct($action, $user, $info)
    {
        $this->action = $action;
        $this->user = $user;
        $this->info = $info;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $roles = Role::all();
        return view('components.forms.user-update-form',['roles' => $roles]);
    }
}
