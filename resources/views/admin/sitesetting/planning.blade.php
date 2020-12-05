@extends('admin.layouts.layout')

@section('title')
 Ajouter Un Planning
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
        <li class="active"><a href="{{ url('/admin/sitesetting') }}"> Modifier les Parametres de site
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
          <form action="{{ url('/admin/sitesetting/'.$sitesetting->id)}}" method="post" enctype='multipart/form-data'>
            {{ csrf_field()}}
                        <div class="form-group row">
                          <div class="col-lg-2">
                             Ajouter un planning
                          </div>
<div class="container page-top">
  <div class="row">
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <img  src="{{url('/storage/'.getSetting()->planning)}}" class="zoom img-fluid "  alt="">
        <input type="file" name="planning" value="">
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