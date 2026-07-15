<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\PictureCategory;
use App\Models\Artwork;

use Mail;

use App\Mail\ContactEmail;


class ShopController extends Controller
{
   public function index()
    {
        foreach(Artwork::all() as $artwork){
            if($artwork->period == 0){
                $artwork->update(['period' => rand(1,12)]);
            }
        }
        $artworks = Artwork::paginate(12);
        return view('index', compact('artworks'));
    }

    public function about(){
        return view('about');
    }

    public function gallery($slug=null)
    {
        $categories = PictureCategory::all();
        $category = null;
        
        if($slug){
            $category = PictureCategory::where('slug',$slug)->first() ?? abort(404);
            $artworks = Artwork::where('category_id',$category->id)->get();
        }
        else{
            $artworks = Artwork::all();
        }
        return view('gallery')
            ->with('categories',$categories)
            ->with('category',$category)
            ->with('artworks',$artworks);
    }

    public function contact(){
        return view('contact');
    }

    public function editGallery(){
        $categories = PictureCategory::all();
        $artworks = Artwork::orderBy('id','desc')->get();
        return view('admin.edit-gallery')
            ->with('artworks',$artworks)
            ->with('categories',$categories);
    }

    public function addPicture(Request $request){
        $artwork = $request->validate($this->artworkRules(true));
        $artwork['is_selected'] = $request->boolean('is_selected');
        $path = base_path()."/public/images/artwork";
        $artwork['image'] = $this->upload_file($request->file('file'),$path);
        $artwork['price'] = 300;
        $artwork['stock'] = 1;
        Artwork::create($artwork);
        return redirect()->back()->with('success_message','Снимката е добавена успешно');
    }

     public function changeLanguage()
    {
        
        $lang = app()->currentLocale() == 'en' ? 'bg' : 'en';        
        
        // Store language in session
        session(['locale' => $lang]);
        app()->setLocale($lang);


        return redirect()->back();
    }

    public function editSingleArtwork($id){
        $artwork = Artwork::find($id);
        $categories = PictureCategory::all();
        return view('admin.edit-single-artwork')
            ->with('categories',$categories)
            ->with('artwork',$artwork);
    }

    public function updateArtwork(Request $request,$id){
        $artwork = $request->validate($this->artworkRules());

        
        if($request->hasFile('file')){
            $path = base_path()."/public/images/artwork";
            $artwork['image'] = $this->upload_file($request->file('file'),$path);
        }
        
        $artwork['price'] = 300;
        $artwork['stock'] = 1;
        $artwork['is_selected'] = $request->is_selected ? 1 : 0;
        Artwork::findOrFail($id)->update($artwork);
        return redirect()->back();
    }

    private function artworkRules(bool $imageRequired = false): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'name_en' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'description_en' => ['nullable', 'string'],
            'category_id' => ['required', 'integer', 'exists:picture_categories,id'],
            'period' => [
                'required',
                'integer',
                Rule::exists('picture_periods', 'id')->where(
                    fn ($query) => $query->where('category_id', request('category_id'))
                ),
            ],
            'file' => [$imageRequired ? 'required' : 'nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'is_selected' => ['nullable'],
        ];
    }

    public function deleteArtwork($id){
        Artwork::find($id)->delete();
        return redirect()->route('edit-gallery')->with('success_message','Снимката е изтрита успешно');
    }

    public function contactPost(Request $request){
        if ($request->filled('website')) {
            abort(403);
        }
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email:rfc,dns',
            'message' => 'required|string|max:3000',
        ]);
        $data = $request->only('name','email','message');
        try{
            Mail::to('velinagrebenska@gmail.com')->send(new ContactEmail($data));
        }catch(\Exception $e){
            info($e->getMessage());
        }

        return redirect()->back();
    }
}
