<?php

function getSetting(){
     return \App\SiteSetting::where('id', 1)->first();
  }

function service(){
     return \App\Service::where('id', 1)->first();
  }

function gallerie(){
     return \App\Gallerie::where('id',1)->first();
  }

function membre(){
  return \App\Membre::where('active',0)->get();
}

function unreadMessage(){
    return \App\Contact::where('view' , 0)->get();
  }

  function countunreadMessage(){
    return \App\Contact::where('view' , 0)->count();
  }
   function allmessage(){
    return \App\Contact::Select('*')->get();
   }

?>