<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Story extends Component
{
    public $story;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Story $story)
    {
        $this->story = $story;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.story');
    }
}
