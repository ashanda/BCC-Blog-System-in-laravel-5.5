<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Images;
use Intervention\Image\ImageManagerStatic as Image;

class GalleryController extends Controller
{

    //front
     public function index()
    {
        $galleries = Gallery::all();
        return view('pages.gallery')

        ->with('gallery', Gallery::all())
         ->with('galleries', $galleries)
         ;
    }

         public function index2($id)
    {
      $gallery = Gallery::findOrFail($id);
        return view('pages.galleryfront')
            ->with('gallery', $gallery);
    }

//front-end

    public function viewGalleryList(){
        $galleries = Gallery::where('created_by', Auth::user()->id)->get();
        return view('admin.gallery.gallery')
            ->with('galleries', $galleries);
    }
    public function saveGallery(Request $request){
        //Validate the request throught validation rules
        $validator = Validator::make($request->all(),[
            'gallery_name' => 'required|min:3',
            'cover_image'=>'required|image',
        ]);


        //take actions when the validation has failed
        if($validator->fails()){
            return redirect('admin/gallery/list')
                ->withErrors($validator)
                ->withInput();
        }


        $gallery = new Gallery;
        //save new gallery

         if($request->hasFile('cover_image'))
        {
            $cover_image = $request->cover_image;

            $cover_image_new_name = time() . $cover_image->getClientOriginalName();

            $cover_image->move('uploads/gallery/cover/', $cover_image_new_name);

            $gallery->cover_image = 'uploads/gallery/cover/'.$cover_image_new_name;
            
        }



        $gallery->name = $request->input('gallery_name');
        $gallery->created_by = Auth::user()->id;
        $gallery->published = 1;
        $gallery->save();



         Session::flash('success', $gallery->name.' Gallery Added Successfully!');
        return redirect()->back();
    }
    public function viewGalleryPics($id){
        $gallery = Gallery::findOrFail($id);
        return view('admin.gallery.gallery-view')
            ->with('gallery', $gallery);
    }
    public function doImageUpload(Request $request){
        // get file from the post request
        $file = $request->file('file');
        // set my file name
        $filename = uniqid() . $file->getClientOriginalName();
        // move the file to  correct location
        if(!file_exists('uploads/gallery/images')){
            mkdir('uploads/gallery/images',0777,true);
        }
        $file->move('uploads/gallery/images', $filename);
        if(!file_exists('uploads/gallery/images/thumbs')){
            mkdir('uploads/gallery/images/thumbs',0777,true);
        }
        $thumb = Image::make('uploads/gallery/images/'.$filename)->resize(300,200)->save('uploads/gallery/images/thumbs/'. $filename,60);
        // save the Image details into database
        $gallery = Gallery::find($request->input('gallery_id'));
        $image = $gallery->images()->create([
            'gallery_id' => $request->input('gallery_id'),
            'file_name' => $filename,
            'file_size' => $file->getClientSize(),
            'file_mime' => $file->getClientMimeType(),
            'file_path' => 'uploads/gallery/images/' . $filename,
            'created_by' => Auth::user()->id,
        ]);
        return $image;
    }
    public function deleteGallery( $id )
    {
        // Load the gallery
        $currentGallery = Gallery::findOrFail($id);
        // check ownership
        if( $currentGallery->created_by != Auth::user()->id ){
            abort('403', 'You are not allowed to delete this gallery !');
        }
        // get the images
        $images = $currentGallery->images();
        //delete the images
        foreach($currentGallery->images as $image){
            unlink(public_path($image->file_path));
        }
        // Delete the DB records
        $currentGallery->images()->delete();
        $currentGallery->delete();
        Session::flash('success',$currentGallery->name.'Gallery Deleted Successfully!');
        return redirect()->back();
    }

    public function deleteImage( $id )
    {
            Images::destroy($id);

        Session::flash('success','Image Deleted Successfully!');
        return redirect()->back();
    }
}