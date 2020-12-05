@extends('admin.layouts.layout')

@section('title')
 Parametres de site
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
                   Logo pour Notre Site web
              </div>
            <div class="col-md-10">
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
             <img  src="{{url('/storage/'.getSetting()->logo)}}" class="zoom img-fluid "  alt="">
             <input type="file" name="logo" value="">
            </div>
            </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-2">
                   Nom de Site Web
              </div>
            <div class="col-md-10">
              {{ Form::text('site_name', $sitesetting->site_name,['class'=>'form-control'])}}
              @error('site_name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            </div>
            <div class="form-group row">
            <div class="col-lg-2">
                Slegon
            </div>
            <div class="col-md-10">
              {{ Form::text('slegon', $sitesetting->slegon,['class'=>'form-control'])}}
              @error('slegon')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            </div>
            <div class="form-group row">
                          <div class="col-lg-2">
                             email
                          </div>
                            <div class="col-md-10">
                               {{ Form::text('email',$sitesetting->email,['class'=>'form-control'])}}
                           
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                          <div class="col-lg-2">
                             Facebook
                          </div>
                            <div class="col-md-10">
                              {{ Form::text('page_fb', $sitesetting->page_fb,['class'=>'form-control'])}}
                                @error('page_fb')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                          <div class="col-lg-2">
                             Adress
                          </div>
                            <div class="col-md-10">
                              {{ Form::text('adress', $sitesetting->adress,['class'=>'form-control'])}}
                                @error('adress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                          <div class="col-lg-2">
                             Télèphone
                          </div>
                            <div class="col-md-10">
                               {{ Form::text('num_tlfn',$sitesetting->num_tlfn,['class'=>'form-control'])}}
                           
                                @error('num_tlfn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                          <div class="col-lg-2">
                             Salle GYM
                          </div>
                            <div class="col-md-10">
                               {{ Form::textarea('A',$sitesetting->A,['class'=>'form-control'])}}
                           
                                @error('A')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                          <div class="col-lg-2">
                             Materiéls
                          </div>
                            <div class="col-md-10">
                               {{ Form::textarea('B',$sitesetting->B,['class'=>'form-control'])}}
                           
                                @error('B')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                          <div class="col-lg-2">
                             Nos Activités
                          </div>
                            <div class="col-md-10">
                               {{ Form::textarea('C',$sitesetting->C,['class'=>'form-control'])}}
                           
                                @error('C')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-lg-2">
                             Qui Somme Nous
                          </div>
                          <div class="col-md-10">
                            {{ Form::textarea('qui_somme_nous',$sitesetting->qui_somme_nous,['class'=>'form-control'])}}
                            @error('qui_somme_nous')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>
                        </div>
                         <div class="form-group row">
                          <div class="col-lg-2">
                             Ajouter un planning
                          </div>
                          <div class="col-md-10">
                             <img  src="{{url('/storage/'.getSetting()->planning)}}" class="zoom img-fluid "  alt="">
                             <input type="file" name="planning" value="">
                            @error('planning')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                            @enderror
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