<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\ImageCategory;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $category=ImageCategory::all();
        $images = Gallery::all();
        return view('backend.gallery.index', compact('images','category'));
    }

    public function create()
    {
        $category=ImageCategory::all();

        return view('backend.gallery.create',compact('category'));
    }

    public function store(Request $request)
    {
        $request->validate([

            'category_id'=>'required',
            'name'=>'required',

            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'status'=>'required',

        ]);

        $gallery=new Gallery();
        $gallery->category_id=$request->category_id;
        $gallery->name=$request->name;
        $gallery->status=$request->status;


        if ($request->hasFile('images')) {
            $imagePath = $request->file('images')->store('images/gallery', 'public');
            $gallery->image = $imagePath;
     
        }

        $gallery->save();

        return redirect(route('gallery.index'));
    }

    public function edit($id)
    {

        $gallery = Gallery::findOrfail($id);
        $category=ImageCategory::all();
        return view('backend.gallery.edit', compact('gallery','category'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id'=>'required',
            'name'=>'required',

            'images' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'status'=>'required',
        ]);

        $gallery = Gallery::findOrFail($id);
        $gallery->category_id=$request->category_id;
        $gallery->name=$request->name;
        $gallery->status=$request->status;


        // Check if new images were uploaded
        if ($request->hasFile('images')) {
                
            $imagePath = $request->file('images')->store('images/gallery', 'public');
            $gallery->image = $imagePath;
        }

        $gallery->save();

        return redirect()->route('gallery.index')->with('success', 'Gallery image updated successfully.');
    }

    public function delete($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Gallery image deleted successfully.');
    }
}
