<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputWithErrors extends Component
{
    public $name;
    public $label;
    public $value;
    public $type;

    public function __construct($name, $label, $value = null,$type)
    {
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        $this->type = $type;
    }

    public function render()
    {
        return view('components.input-with-errors');
    }
}
