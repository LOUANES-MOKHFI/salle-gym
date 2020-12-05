<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Gallerie;
use Illuminate\Support\Facades\Redirect;
class GallerieController extends Controller
{
 public function index(){
     $gallerie = Gallerie::find(1);
        return view('admin.sitesetting.gallerie',compact('gallerie'));
    }

public function store(Request $request, Gallerie $gallerie){

       if($request->hasFile('image1'))
           {
            $gallerie->image1 = $request->image1->store('image1'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image2'))
           {
            $gallerie->image2 = $request->image2->store('image2'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image3'))
           {
             $gallerie->image3 = $request->image3->store('image3'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image4'))
           {
            $gallerie->image4 = $request->image4->store('image4'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image5'))
           {
            $gallerie->image5 = $request->image5->store('image5'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image6'))
           {
            $gallerie->image6 = $request->image6->store('image6'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image7'))
           {
            $gallerie->image7 = $request->image7->store('image7'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image8'))
           {
            $gallerie->image8 = $request->image8->store('image8'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image9'))
           {
            $gallerie->image9 = $request->image9->store('image9'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image10'))
           {
            $gallerie->image10 = $request->image10->store('image10'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image11'))
           {
            $gallerie->image11 = $request->image11->store('image11'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image12'))
           {
            $gallerie->image12 = $request->image12->store('image12'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
        $gallerie->save();
          
         session()->flash('success','insertion à étè faite avec succée');

 return redirect('/admin/sitesetting/gallerie');
}
  
public function update($id,Request $request){

     $gallerie = Gallerie::find($id);
        if($request->hasFile('image1'))
           {
            $gallerie->image1 = $request->image1->store('image1'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image2'))
           {
            $gallerie->image2 = $request->image2->store('image2'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image3'))
           {
             $gallerie->image3 = $request->image3->store('image3'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image4'))
           {
            $gallerie->image4 = $request->image4->store('image4'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image5'))
           {
            $gallerie->image5 = $request->image5->store('image5'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image6'))
           {
            $gallerie->image6 = $request->image6->store('image6'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image7'))
           {
            $gallerie->image7 = $request->image7->store('image7'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image8'))
           {
            $gallerie->image8 = $request->image8->store('image8'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image9'))
           {
            $gallerie->image9 = $request->image9->store('image9'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image10'))
           {
            $gallerie->image10 = $request->image10->store('image10'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image11'))
           {
            $gallerie->image11 = $request->image11->store('image11'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image12'))
           {
            $gallerie->image12 = $request->image12->store('image12'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
        $gallerie->save();
          
          session()->flash('success','La modification à étè faite avec succée');

 return redirect('/admin/sitesetting/gallerie');
    }
}


