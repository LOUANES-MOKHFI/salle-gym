<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteSetting;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\UploadedFile;
class SiteSettingController extends Controller
{
    public function index(SiteSetting $sitesetting){
     $sitesetting = SiteSetting::find(1);
   	return view('admin.sitesetting.index',compact('sitesetting'));

   }

public function store(Request $request, SiteSetting $sitesetting){
  if($request->hasFile('logo'))
           {
            $sitesetting->logo = $request->logo->store('logo'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
        $sitesetting->site_name = $request->input('site_name');
        $sitesetting->latitude = $request->input('latitude');
        $sitesetting->langtitude = $request->input('langtitude');
        $sitesetting->slegon = $request->input('slegon');
        $sitesetting->email = $request->input('email');
        $sitesetting->adress = $request->input('adress');
        $sitesetting->num_tlfn = $request->input('num_tlfn');
		$sitesetting->page_fb = $request->input('page_fb');
		$sitesetting->A = $request->input('A');
		$sitesetting->B = $request->input('B');
		$sitesetting->C = $request->input('C');
	    $sitesetting->qui_somme_nous = $request->input('qui_somme_nous');
       if($request->hasFile('image1'))
           {
            $sitesetting->image1 = $request->image1->store('image1'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image2'))
           {
            $sitesetting->image2 = $request->image2->store('image2'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image3'))
           {
             $sitesetting->image3 = $request->image3->store('image3'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image4'))
           {
            $sitesetting->image4 = $request->image4->store('image4'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image5'))
           {
            $sitesetting->image5 = $request->image5->store('image5'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image6'))
           {
            $sitesetting->image6 = $request->image6->store('image6'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image7'))
           {
            $sitesetting->image7 = $request->image7->store('image7'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image8'))
           {
            $sitesetting->image8 = $request->image8->store('image8'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image9'))
           {
            $sitesetting->image9 = $request->image9->store('image9'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image10'))
           {
            $sitesetting->image10 = $request->image10->store('image10'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image11'))
           {
            $sitesetting->image11 = $request->image11->store('image11'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image12'))
           {
            $sitesetting->image12 = $request->image12->store('image12'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
              if($request->hasFile('planning'))
           {
            $sitesetting->planning = $request->planning->store('planning'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
        $sitesetting->save();
          
         session()->flash('success','La modification à étè faite avec succée');

 return redirect('/admin/sitesetting');
}
  
public function update($id,Request $request){

		$sitesetting = SiteSetting::find($id);
    if($request->hasFile('logo'))
           {
            $sitesetting->logo = $request->logo->store('logo'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
        $sitesetting->site_name = $request->input('site_name');
        $sitesetting->slegon = $request->input('slegon');
        $sitesetting->email = $request->input('email');
        $sitesetting->adress = $request->input('adress');
        $sitesetting->num_tlfn = $request->input('num_tlfn');
		$sitesetting->page_fb = $request->input('page_fb');
		$sitesetting->A = $request->input('A');
		$sitesetting->B = $request->input('B');
		$sitesetting->C = $request->input('C');
	    $sitesetting->qui_somme_nous = $request->input('qui_somme_nous');

        if($request->hasFile('image1'))
           {
            $sitesetting->image1 = $request->image1->store('image1'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image2'))
           {
            $sitesetting->image2 = $request->image2->store('image2'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image3'))
           {
             $sitesetting->image3 = $request->image3->store('image3'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image4'))
           {
            $sitesetting->image4 = $request->image4->store('image4'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image5'))
           {
            $sitesetting->image5 = $request->image5->store('image5'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image6'))
           {
            $sitesetting->image6 = $request->image6->store('image6'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image7'))
           {
            $sitesetting->image7 = $request->image7->store('image7'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image8'))
           {
            $sitesetting->image8 = $request->image8->store('image8'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image9'))
           {
            $sitesetting->image9 = $request->image9->store('image9'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image10'))
           {
            $sitesetting->image10 = $request->image10->store('image10'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image11'))
           {
            $sitesetting->image11 = $request->image11->store('image11'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image12'))
           {
            $sitesetting->image12 = $request->image12->store('image12'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
            if($request->hasFile('planning'))
           {
            $sitesetting->planning = $request->planning->store('planning'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
        $sitesetting->save();
          
          session()->flash('success','La modification à étè faite avec succée');

 return redirect('/admin/sitesetting');
    }

    
}
