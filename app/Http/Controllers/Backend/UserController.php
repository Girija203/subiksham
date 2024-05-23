<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
   
   
    public function index(){
        $users=User::all();
        return view('backend.user.index',compact('users'));
    
    }
   
    public function create(){

        return view('backend.user.create');
    }


    public function store(Request $request){

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|max:10',
            'password' => 'required|string|min:6',
            'profile_photo_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        
        ]);
     
    
        $user = new User();
        $user->first_name= $request->first_name;
        $user->last_name= $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->mobile= $request->mobile;
        $user->type = "Admin";
        
        // Hashing the password

        if ($request->hasFile('profile_photo_path')) {
            $imagePath = $request->file('profile_photo_path')->store('images', 'public');
            $user->profile_photo_path = $imagePath;
        }
        $user->save();

        return redirect()->route('user.index')->with('success','successfully created');


    }


    public function edit($id){

        $user=User::findOrfail($id);

        return view('backend.user.edit',compact('user'));

    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
    
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'mobile' => 'required|min:10',
            // 'password' => 'required',
            'profile_photo_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        // $user->password = Hash::make($request->password);
        $user->mobile = $request->mobile;
        $user->status = $request->status; 
        $user->type = "Admin";
    
       
        if ($request->hasFile('profile_photo_path')) {
                
            $imagePath = $request->file('profile_photo_path')->store('images', 'public');
            $user->profile_photo_path = $imagePath;
        }
    
        $user->save();
    
        return redirect()->route('user.index')->with('success', 'User updated successfully.');
    }
    
    public function delete($id){

        $user=User::findOrfail($id);
        $user->delete();
        return redirect()->route('user.index')->with('success','successfully deleted');
    }

}
