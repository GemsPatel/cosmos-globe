<?php

namespace App\View\Components;

use Illuminate\View\Component;

class breadcrumb extends Component
{

    public $title;
    public $breadcrumb;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $breadcrumb)
    {
        $this->title = $title;
        $this->breadcrumb = $breadcrumb;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.breadcrumb');
    }
}
