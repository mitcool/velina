<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\PictureCategory;
class Menu extends Component
{
    public $categories;
    public function __construct()
    {
        $this->categories  = PictureCategory::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.menu');
    }
}
