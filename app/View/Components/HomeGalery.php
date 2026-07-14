<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Artwork;

class HomeGalery extends Component
{
    public $pastel_artworks;
    public $akvarel_artworks;
    public $masleni_artworks;
    public $other_artworks;
    public function __construct()
    {
            $this->pastel_artworks = Artwork::where('category_id',1)->get();
            $this->akvarel_artworks = Artwork::where('category_id',2)->get();
            $this->masleni_artworks = Artwork::where('category_id',3)->get();
            $this->other_artworks = Artwork::where('category_id',4)->get();
    }

    public function render(): View|Closure|string
    {
        return view('components.home-galery');
    }
}
