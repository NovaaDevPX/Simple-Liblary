<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    public string $title;
    /**
     * Create a new component instance.
     */
    public function __construct($title = null)
    {
        $this->title = $title
            ? config('app.name') . ' | ' . $title
            : config('app.name');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.app');
    }
}
