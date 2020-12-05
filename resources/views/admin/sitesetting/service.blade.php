@extends('admin.layouts.layout')

@section('title')
 Ajouter Des Services
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
    <li class="active"><a href="{{ url('/admin/sitesetting/service') }}"> Modifier les Parametres de site</a></li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Modifier les Parametres de site</h3>
        </div><br>
  <form action="{{ url('/admin/sitesetting/service/'.$service->id)}}" method="post" enctype='multipart/form-data'>
            {{ csrf_field()}}
    <div class="form-group row">
      <div class="col-lg-2">Ajouter Des Services</div>
        <div class="container page-top">
          <div class="form-group row">
              <div class="col-lg-2">
                   Salle De mesculation
              </div>
            <div class="col-md-9 col-lg-6">
              {{ Form::textarea('salle_musc', $service->salle_musc,['class'=>'form-control'])}}
              @error('salle_musc')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="col-md-9 col-xs-12 left col-lg-4">
             <img  src="{{url('/storage/'.service()->image_musc)}}" class="zoom img-fluid "  alt="">
            <input type="file" name="image_musc" value="">
            </div>
          </div>
              <div class="form-group row">
              <div class="col-lg-2">
                   Espace Cardio
              </div>
            <div class="col-md-9 col-lg-6">
              {{ Form::textarea('cardio', $service->cardio,['class'=>'form-control'])}}
              @error('cardio')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          <div class="col-lg-4 col-md-9 col-xs-12 thumb">
           <img  src="{{url('/storage/'.service()->image_cardio)}}" class="zoom img-fluid "  alt="">
          <input type="file" name="image_cardio" value="">
          </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-2">
                   Autres
              </div>
            <div class="col-md-9 col-lg-6">
              {{ Form::textarea('autre', $service->autre,['class'=>'form-control'])}}
              @error('autre')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          <div class="col-lg-4 col-md-9 col-xs-12 thumb">
           <img  src="{{url('/storage/'.service()->image_autre)}}" class="zoom img-fluid "  alt="">
          <input type="file" name="image_autre" value="">
          </div>
            </div>
        </div>
    </div>
    <Button type="submit" name="submit" class="btn btn-success">Sauvegarder<i class="fa fa-save"></i>
</Button>
  </form>
</section>

@endsection


@section('footer')

    
</script>
@endsection