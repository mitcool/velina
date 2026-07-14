<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtworkController extends Controller
{
   public function index()
    {
        $artworks = Artwork::latest()->paginate(10);
        return view('admin.artworks.index', compact('artworks'));
    }

    public function create()
    {
        return view('admin.artworks.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'price' => 'required|numeric',
            'image' => 'required|image',
            'stock' => 'required|integer'
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')
                ->store('artworks', 'public');
        }

        Artwork::create($data);

        return redirect()->route('admin.artworks.index');
    }

    public function edit(Artwork $artwork)
    {
        return view('admin.artworks.edit', compact('artwork'));
    }

    public function update(Request $request, Artwork $artwork)
    {
        $data = $request->validate([
            'title' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer'
        ]);

        $artwork->update($data);

        return redirect()->route('admin.artworks.index');
    }

    public function destroy(Artwork $artwork)
    {
        $artwork->delete();
        return back();
    }
}
