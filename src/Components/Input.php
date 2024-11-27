<?php

namespace Boilerplate\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $type;
    public $name;
    public $id;
    public $value;
    public $placeholder;
    public $class;

    public function __construct($type = 'text', $name, $id = null, $value = null, $placeholder = '', $class = 'input')
    {
        $this->type = $type;
        $this->name = $name;
        $this->id = $id ?? $name;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->class = $class;
    }

    public function render()
    {
        return view('boilerplate::components.input');
    }
}
