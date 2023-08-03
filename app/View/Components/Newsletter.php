<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Newsletter extends Component
{
    public $image;
    public $month;
    public $preview;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($image, $month, $preview)
    {
        $this->image = $image;
        $this->month = $month;
        $this->preview = $preview;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.newsletter');
    }
}
