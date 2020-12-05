<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
   public function index(){
   	return view('admin.home.index');
   }  
   public function profil(User $user){

      $user = Auth::user();
               return view('admin.profil',compact('user'));

    }

     public function edit_p(User $user){
      $user = Auth::user(); 
        return view('admin.modifier_profil',compact('user'));
    }
    public function update_profil($id,Request $request){
         
         $user = User::find($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

         session()->flash('success','La modification est faite avec succée');

 return redirect('/admin/profil');
    }

    public function add_pub(){
      
    }
}
