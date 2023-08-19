<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SlideOver extends Component
{
    public $title;
    public $desc;
    public $alpineId;
    public $action;
    public $actionText;

    /**
     * Create a new component instance.
     */
    public function __construct(string $title, string $alpineId, string $action, string $actionText, string $desc = "")
    {
        $this->title = $title;
        $this->desc = $desc;
        $this->alpineId = $alpineId;
        $this->action = $action;
        $this->actionText = $actionText;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.slideover');
    }
}
