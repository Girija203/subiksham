<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use App\Mail\ContactReplyMail;
use App\Models\Branch;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Gallery;
use App\Models\ImageCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
   public function home(){

    $course = Course::orderBy('created_at','DESC')->where('status',1)->get();
 

    return view('frontend.home',compact('course'));
   }

   public function about(){

    return view('frontend.about');
   }

   public function courses(){

    $course = Course::orderBy('created_at','DESC')->where('status',1)->get();

    return view('frontend.courses',compact('course'));
   }

   public function gallery(){
    $imagecategories = ImageCategory::orderBy('created_at','DESC')->where('status',1)->get();
    $galleries = Gallery::orderBy('created_at','DESC')->where('status',1)->get();


    return view('frontend.gallery',compact('imagecategories','galleries'));
   }

   public function ourfranchise(){

      return view('frontend.our-franchise');
     }

 
    public function nearme(){
      $branches = []; 
      $searchPerformed = false; 
      return view('frontend.near-me', compact('branches', 'searchPerformed'));
  }
  
  public function search(Request $request)
  {
      $query = $request->input('query');
      $branches = Branch::where('state', 'like', "%$query%")
                      ->orWhere('city', 'like', "%$query%")
                      ->orWhere('address', 'like', "%$query%")
                      ->get();
      $searchPerformed = true; 
      return view('frontend.near-me', compact('branches', 'searchPerformed'));
  }
  

     public function contact(){

      return view('frontend.contact');
     }

     public function store(Request $request)
     {
        $request->validate([
            'contact' => 'required|max:10',
        ]);


         $data = [
             'name' => $request->name,
             'subject' => $request->subject,
             'contact' => $request->contact,
             'email' => $request->email,
             'message' => $request->message,
         ];
      //    dd($data);
         $mailData = Contact::create($data);
        Mail::to('girijajayamoorthy@gmail.com')->send(new ContactFormMail($mailData));
         Mail::to($request['email'])->send(new ContactReplyMail($mailData));
         return redirect()->back()->with('success', 'We recieved your message, Our team contact shortly Thank You!');
     }

     public function contactindex(){

        $contact=Contact::all();

        return view('backend.contact.index',compact('contact'));


     }

     public function terms(){

      return view('frontend.terms&condition');
     }

     public function privacy(){

      return view('frontend.privecy');
     }

     public function faq(){

      return view('frontend.faq');
     }

     public function singleclass($slug) {
        $course = Course::where('slug', $slug)->first(); // Retrieve the first matching course
        return view('frontend.single-class', compact('course'));
    }
}
