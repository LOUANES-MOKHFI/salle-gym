@extends('admin.layouts.layout')

@section('title')
 inserer une gallerie d'images
@endsection

@section('header')

  {!! Html::style('designe/assets/css/gallerie.css') !!}

@endsection

@section('content')

<section class="content-header">
      <h1>
 Parametres de site
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i>Accueil</a></li>
        <li class="active"><a href="{{ url('/admin/sitesetting/gallerie') }}"> Modifier les Parametres de site
</a></li>
      </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Modifier les Parametres de site</h3>
          </div><br>
          <form action="{{ url('/admin/sitesetting/gallerie/'.$gallerie->id)}}" method="post" enctype='multipart/form-data'>
            {{ csrf_field()}}
        
                        <div class="form-group row">
                          <div class="col-lg-2">
                             Ajouter un Gallerie
                          </div>
<div class="container page-top">
  <div class="row">
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <img  src="{{url('/storage/'.gallerie()->image1)}}" class="zoom img-fluid "  alt="">
        <input type="file" name="image1" value="">
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <img  src="{{url('/storage/'.gallerie()->image2)}}" class="zoom img-fluid "  alt="">
        <input type="file" name="image2" value="">
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <img  src="{{url('/storage/'.gallerie()->image3)}}" class="zoom img-fluid "  alt="">
        <input type="file" name="image3" value="">
    </div>      
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <img  src="{{url('/storage/'.gallerie()->image4)}}" class="zoom img-fluid "  alt="">
        <input type="file" name="image4" value="">
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <img  src="{{url('/storage/'.gallerie()->image5)}}" class="zoom img-fluid "  alt="">
        <input type="file" name="image5" value="">
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <img  src="{{url('/storage/'.gallerie()->image6)}}" class="zoom img-fluid "  alt="">
        <input type="file" name="image6" value="">
    </div>      
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <img  src="{{url('/storage/'.gallerie()->image7)}}" class="zoom img-fluid "  alt="">
        <input type="file" name="image7" value="">
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <img  src="{{url('/storage/'.gallerie()->image8)}}" class="zoom img-fluid "  alt="">
        <input type="file" name="image8" value="">
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <img  src="{{url('/storage/'.gallerie()->image9)}}" class="zoom img-fluid "  alt="">
        <input type="file" name="image9" value="">
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <img  src="{{url('/storage/'.gallerie()->image10)}}" class="zoom img-fluid "  alt="">
        <input type="file" name="image10" value="">
    </div>     
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <img  src="{{url('/storage/'.gallerie()->image11)}}" class="zoom img-fluid "  alt="">
        <input type="file" name="image11" value="">
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <img  src="{{url('/storage/'.gallerie()->image12)}}" class="zoom img-fluid "  alt="">
        <input type="file" name="image12" value="">
    </div>         
</div>
</div>
<Button type="submit" name="submit" class="btn btn-success">Sauvegarder<i class="fa fa-save"></i>
</Button>
</form>
           
        </div>
    </div>
  </div>
</section>

@endsection


@section('footer')
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

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