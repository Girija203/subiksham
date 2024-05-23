<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    public function index()
    {

        $course = Course::all();

        return view('backend.course.index', compact('course'));
    }

    public function create()
    {

        return view('backend.course.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:courses,title',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'nullable',
            
        ], [
            'title.required' => 'Title is required.',
            'title.unique' => 'course with this title already exists.',
        ]);

      
      

        // dd($request);
        $course = new Course();
        $course->title = $request->input('title');
        $course->slug = Str::slug($request->input('title'));
       
        $course->course_detail = $request->input('course_detail');
     
      
        $course->status = $request->input('status');
      

        if ($request->hasFile('image')) {

            $imagePath = $request->file('image')->store('images/course', 'public');
            $course->image = $imagePath;
        }

        $videoUrl = $request->video;

        if (strpos($videoUrl, 'iframe') !== false) {

            $videoUrl = substr($videoUrl, strpos($videoUrl, 'https'));

            $videoUrl = substr($videoUrl, 0, strpos($videoUrl, '?si='));
        }

        if (strpos($videoUrl, 'youtu.be') !== false) {
            $videoUrl = str_replace('youtu.be', 'youtube.com/embed', $videoUrl);
        } elseif (strpos($videoUrl, 'youtube.com/shorts') !== false) {
            $videoUrl = str_replace('shorts', 'embed', $videoUrl);
        }

        $course->video = $videoUrl;

        $course->save();

        return redirect()->route('course.index')->with('success', 'course created successfully');
    }

    public function edit($id)
    {

        $course = Course::findOrfail($id);
      

        return view('backend.course.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|unique:courses,title,' . $id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'nullable',
           
        ], [
            'title.required' => 'Title is required.',
            'title.unique' => 'course with this title already exists.',
        ]);

       

        $course = Course::findOrFail($id);

        $videoUrl = $request->video;

        if (strpos($videoUrl, 'iframe') !== false) {

            $videoUrl = substr($videoUrl, strpos($videoUrl, 'https'));

            $videoUrl = substr($videoUrl, 0, strpos($videoUrl, '?si='));
        }

        if (strpos($videoUrl, 'youtu.be') !== false) {
            $videoUrl = str_replace('youtu.be', 'youtube.com/embed', $videoUrl);
        } elseif (strpos($videoUrl, 'youtube.com/shorts') !== false) {
            $videoUrl = str_replace('shorts', 'embed', $videoUrl);
        }

        $course->video = $videoUrl;

            $course->title = $request->input('title');
            $course->slug = Str::slug($request->input('title'));
            $course->course_detail = $request->input('course_detail');
            $course->status = $request->input('status');
          
      

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/course', 'public');
            $course->image = $imagePath;
        }

      


        $course->save();

        return redirect()->route('course.index')->with('success', 'courset updated successfully');
    }

    public function delete($id)
    {

        $course = Course::findOrFail($id);
        $course->delete();
        return redirect()->route('course.index')->with('success', 'course deleted successfully');
    }
}
