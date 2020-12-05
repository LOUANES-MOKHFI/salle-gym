<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Http\Requests\ContactRequest;
use App\Http\Requests;
class ContactController extends Controller
{
   public function index(){
      $contact = Contact::all();
      return view('admin.contact.index',compact('contact'));
     }
    public function store(Contact $contact,ContactRequest $request){

     $contact->create(
     	[
     	    'name'       => $request->name,       
     	    'subject'    => $request->subject,
     	    'email'      => $request->email,
     	    'message'    => $request->message,
     	    'view'       => 0,
        ]);
     
      session()->flash('success','Votre message à étè envoyer avec succeé');

      return redirect('/contact');

   }

    public function destroy($id){
   
        $contact = Contact::find($id); // recupere les donnees de la bdd qui a une id=$id
        $contact->delete();
       session()->flash('success','la supression est faite avec succée');

 return redirect('/admin/contact');
    }

  public function show($id,Contact $contact){
      $contact = $contact->find($id);
        
      if($contact){
         $contact->view = 1;
        $contact->save();
        return view('admin.contact.show',compact('contact'));
      }
    }
}
