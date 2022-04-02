<?php

namespace App\Http\Controllers;

use App\Models\User;  
use Illuminate\Support\Facades\Redirect;


use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function UserView(){
        $data['alldata'] = user::all();
        return view('front.index',$data);
        }






        public function UserEdit($id){



            $editData = User::find($id);
            return view('front.backend.view',compact('editData'));
    
        }





        public function UserUpdate(Request $request,$id){



            $data = User::find($id);



            $data->name=$request->name;
            $data->email=$request->email;
            $data->dob=$request->dob;
            $data->city=$request->city;
            $data->country=$request->country;
            $data->activity=$request->activity;




           


            
            $data->save();
            
     
            
            
            
            return redirect()->route('home');
        
        
        
        }









        public function UserDelete($id){
    
            $user = User::find($id);
            $user-> delete();
            
            
            
            
            return redirect()->route('home');
            
            
            
            }
}
