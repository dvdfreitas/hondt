<?php

namespace App\Http\Livewire;

use App\Models\Story;
use Livewire\Component;
use Livewire\WithPagination;

class StoriesIndex extends Component
{
    use WithPagination;

    public function render()
    {
        $stories = Story::paginate(10);
        return view('livewire.stories-index', ['stories' => $stories]);
    }
}
