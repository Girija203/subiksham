<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ImageCategory;
use Illuminate\Http\Request;

class ImageCategoryController extends Controller
{
    public function index()
    {
        $category = ImageCategory::all();
        return view('backend.imagecategory.index', compact('category'));
    }

    public function create()
    {

        return view('backend.imagecategory.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'status'=>'required',
        ]);

        $category=new ImageCategory();
        $category->name= $request->name;
        $category->status= $request->status;
        $category->save();

        return redirect(route('image.category'))->with('success', ' ImageCategory created successfully.');;
    }

    public function edit($id)
    {

        $category = ImageCategory::findOrfail($id);
        return view('backend.imagecategory.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'status'=>'required',
        ]);

        $category = ImageCategory::findOrFail($id);

        $category->name=$request->name;
        $category->status=$request->status;

        $category->save();


        // Check if new images were uploaded
     

        return redirect()->route('image.category')->with('success', ' ImageCategory updated successfully.');
    }

    public function delete($id)
    {
        $category = ImageCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('image.category')->with('success', 'ImageCategory deleted successfully.');
    }
}
