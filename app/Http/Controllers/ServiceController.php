<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Service;

use Illuminate\Http\UploadedFile;
class ServiceController extends Controller
{
    public function index(){
     $service = Service::find(1);
      return view('admin.sitesetting.service',compact('service'));
    }

    public function update($id,Request $request){
		$service = Service::find($id);

        $service->salle_musc = $request->input('salle_musc');
        $service->cardio = $request->input('cardio');
        $service->autres = $request->input('autre');

        if($request->hasFile('image_musc'))
           {
            $service->image_musc = $request->image_musc->store('image_musc'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image_cardio'))
           {
            $service->image_cardio = $request->image_cardio->store('image_cardio'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
           if($request->hasFile('image_autre'))
           {
             $service->image_autre = $request->image_autre->store('image_autre'); //cree un dossier cours eu niveau de dossier storages/app/public  ou en l'enregistre les cours de module
           }
          
        $service->save();
          
          session()->flash('success','La modification à étè faite avec succée');

 return redirect('/admin/sitesetting/service');
    }
}
