<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function create(){

        return view('backend.branch.create');
    }


    public function index(){

        $branch=Branch::all();

        return view('backend.branch.index',compact('branch'));
    }

    public function store(Request $request){

        $request->validate([

            'branch_name'=>'nullable',
            'contact' => 'nullable',
            'address'=>'required',
            'postal_code'=>'nullable',
            'state'=>'nullable',
            'city'=>'nullable',
            'kms'=>'nullable',
            'landmark'=>'nullable',


        ]);

        $branch=new Branch();
        $branch->branch_name=$request->input('branch_name');
        $branch->contact=$request->input('contact');
        $branch->address=$request->input('address');
        $branch->postal_code=$request->input('postal_code');
        $branch->state=$request->input('state');
        $branch->city=$request->input('city');
        $branch->kms=$request->input('kms');
        $branch->landmark=$request->input('landmark');

        $branch->save();

        return redirect()->route('branch.index')->with('success', 'Branch created successfully');;

    }


        public function edit($id){

            $branch=Branch::findOrfail($id);

            return view('backend.branch.edit',compact('branch'));
        }


        public function update(Request $request,$id){

            $request->validate([

                'branch_name'=>'nullable',
                'contact' => 'nullable',
                'address'=>'required',
                'postal_code'=>'nullable',
                'state'=>'nullable',
                'city'=>'nullable',
                'kms'=>'nullable',
                'landmark'=>'nullable',
    
            ]);


            $branch=Branch::findOrfail($id);
            $branch->branch_name=$request->input('branch_name');
            $branch->contact=$request->input('contact');
            $branch->address=$request->input('address');
            $branch->postal_code=$request->input('postal_code');
            $branch->state=$request->input('state');
            $branch->city=$request->input('city');
            $branch->kms=$request->input('kms');
            $branch->landmark=$request->input('landmark');
    
            $branch->save();

            return redirect()->route('branch.index')->with('success', 'Branch updated successfully');

        }


        public function delete($id){

            
            $branch=Branch::findOrfail($id);

            $branch->delete();

            return redirect()->route('branch.index')->with('success', 'Branch deleted successfully');

        }
}
