<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membre;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use carbon\Carbon;
use App\Http\Requests\MembreRequest;

class MembreController extends Controller
{
   public function index(){
        $membre = Membre::where('active',0)->get();
    	return view('admin.membre.index',compact('membre'));
    }

    public function create(){
    	return view('admin.membre.add');
    }

    protected function store(MembreRequest $request,Membre $membre){

 $id_user = Auth::user()->id;
     $membre->create([
            'name'  => $request->name,
            'num_tlfn' => $request->num_tlfn,
            'nbr_moi' => $request->nbr_moi,
            'montant' => $request->montant,
            'id_user' => $id_user,

        ]);
      session()->flash('success','Le membre est ajoutée avec succée');

 return redirect('/admin/membre');
        
        //return redirect('/admin/users')->withFlashMessage('Le membre est ajouter avec succée');
    }

     public function edit($id){
          $membre = Membre::find($id);

          // $membre = Membre::find($id);
          return view('admin.membre.edit',compact('membre'));
      
    }


     public function update($id,Request $request){
     	    $membre = Membre::find($id);
        $id_user = Auth::user()->id;
       // dd($id);
             //  dd($membre->id_membre);

        $membre->name     = $request->input('name');
        $membre->num_tlfn = $request->input('num_tlfn');
        $membre->nbr_moi  = $request->input('nbr_moi');
        $membre->montant  = $request->input('montant');
        $membre->id_user  = $id_user;
        $membre->save();
          
         session()->flash('success','Le membre est modifiée avec succée');

 return redirect('/admin/membre');
       //return redirect('/admin/produit')->withFlashMessage('Le membre est modifier avec succée');
    }

 public function destroy($id){
       	
          $membre = Membre::find($id);
          $membre->active = 0;
          $membre->save();
       // Membre::where('id',$id)->delete();

        session()->flash('success','Le membre est supprimée avec succée');

 return redirect('/admin/membre');
    }

 public function show($id){
          $membre = Membre::find($id);
   $now = Carbon::now();

       return view('admin.membre.show',compact('membre','now'));
       

     
    }
}
