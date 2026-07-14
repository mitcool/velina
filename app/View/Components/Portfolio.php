<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\PictureCategory;
use App\Models\Artwork;

class Portfolio extends Component
{
    public $categories;
    public $artworks;
    public function __construct()
    {
        $this->categories = PictureCategory::all();
        $this->artworks = Artwork::where('is_selected',1)->get();
    }

    public function render(): View|Closure|string
    {
        return view('components.portfolio');
    }
}
