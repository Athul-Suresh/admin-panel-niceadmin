<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActionRow extends Component
{

    public $editPermission;
    public $editLink;
    public $deleteLink;
    public $deletePermission;
    public $model;

    public function __construct(
        $editPermission,
        $editLink,
        $deleteLink,
        $deletePermission,
        $model
    ) {
        $this->editPermission = $editPermission;
        $this->editLink = $editLink;
        $this->deleteLink = $deleteLink;
        $this->deletePermission = $deletePermission;
        $this->model = $model;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action-row');
    }
}
