@extends('layouts.app')

@section('title')
  Gallerie
@endsection

@section('header')

  {!! Html::style('designe/assets/css/gallerie.css') !!}

@endsection
@section('content')
<div class="container page-top">
    <div class="header">
     <h1><span>Photos de</span> {{gallerie()->site_name}} <span>votre salle de sport</span></h1>
    </div>
    <div class="row">
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <img  src="{{url('/storage/'.gallerie()->image1)}}" class="zoom img-fluid "  alt="">   
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <img  src="{{url('/storage/'.gallerie()->image2)}}" class="zoom img-fluid "  alt="">   
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <img  src="{{url('/storage/'.gallerie()->image3)}}" class="zoom img-fluid "  alt="">   
    </div>      
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <img  src="{{url('/storage/'.gallerie()->image4)}}" class="zoom img-fluid "  alt="">                   
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <img  src="{{url('/storage/'.gallerie()->image5)}}" class="zoom img-fluid "  alt="">                   
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <img  src="{{url('/storage/'.gallerie()->image6)}}" class="zoom img-fluid "  alt="">   
    </div>      
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <img  src="{{url('/storage/'.gallerie()->image7)}}" class="zoom img-fluid "  alt="">
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <img  src="{{url('/storage/'.gallerie()->image8)}}" class="zoom img-fluid "  alt="">                   
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <img  src="{{url('/storage/'.gallerie()->image9)}}" class="zoom img-fluid "  alt="">
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <img  src="{{url('/storage/'.gallerie()->image10)}}" class="zoom img-fluid "  alt="">
    </div>     
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <img  src="{{url('/storage/'.gallerie()->image11)}}" class="zoom img-fluid "  alt="">                  
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <img  src="{{url('/storage/'.gallerie()->image12)}}" class="zoom img-fluid "  alt=""> 
    </div>        
</div>
</div>

		
@endsection

@section('footer')
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
  $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
    
    $(".zoom").hover(function(){
		
		$(this).addClass('transition');
	}, function(){
        
		$(this).removeClass('transition');
	});
});
    
</script>
@endsection