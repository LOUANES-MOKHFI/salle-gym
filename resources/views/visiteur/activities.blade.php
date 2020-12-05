@extends('layouts.app')

@section('title')
 nos activités
@endsection

@section('header')

  {!! Html::style('designe/assets/css/gallerie.css') !!}
<style type="text/css">
	.imageinset{
		height: 70px;
		width: 70px;
	}
</style>
@endsection

@section('content')

<div class="container-fluid">
    <div class="container">
        <div class="row py-4">
            <div class="col-md-4 py-3">
             <div class="row fh5co_contact_us_no_icon_difh5co_hover">
               <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
				<h4><strong>Salle De Musculation</strong></h4>
				<div class="col-lg-12 col-md-4 col-xs-6 thumb">
       			<img src="{{url('/storage/'.service()->image_musc)}}" class="zoom img-fluid "  alt="">
		       </div>
                <span class="d-block c_g fh5co_contact_us_no_text">{{service()->salle_musc}}</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-4 py-3">
              <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                 <h4><strong>Espace Cardio</strong></h4>
                 <div class="col-lg-12 col-md-4 col-xs-6 thumb">
       			 <img src="{{url('/storage/'.service()->image_cardio)}}" class="zoom img-fluid "  alt="">
		       </div>
                    <span class="d-block c_g fh5co_contact_us_no_text">{{service()->cardio}}</span>
                </div>
                <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-4 py-3">
              <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                <h4><strong>Autres services</strong></h4>
                <div class="col-lg-12 col-md-4 col-xs-6 thumb">
       			<img  src="{{url('/storage/'.service()->image_autre)}}" class="zoom img-fluid "  alt="">
		       </div>    
                        <span class="d-block c_g fh5co_contact_us_no_text">{{service()->autres}}</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

@endsection