<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class ImageUploader extends Component
{

    public $src;

    public $name;

    /**
     * @param $src
     * @param $name
     */
    public function __construct($src, $name)
    {
        $this->src = $src;
        $this->name = $name;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputs.image-uploader');
    }
}
