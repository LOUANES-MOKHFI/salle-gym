@extends('layouts.app')

@section('title')
  Contacte Nous
@endsection

@section('header')

  {!! Html::style('designe/assets/css/gallerie.css') !!}

</script>
@endsection

@section('content')
<div class="container-fluid contact_us_bg_img" >
    <div class="container">
        <div class="row">
            <a href="{{url('/home')}}" class="fh5co_con_123"><i class="fa fa-home"></i></a>
            <a href="#" class="fh5co_con pt-2"> Contacte Nous </a>
        </div>
    </div>
</div>
<div class="container-fluid  fh5co_fh5co_bg_contcat">
    <div class="container">
        <div class="row py-4">
            <div class="col-md-4 py-3">
                <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                    <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                        <div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-phone"></i></span> </div>
                    </div>
                    <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                        <span class="c_g d-block">Appelle Nous</span>
                        <span class="d-block c_g fh5co_contact_us_no_text">+213(0){{getSetting()->num_tlfn}}</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-4 py-3">
                <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                    <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                        <div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-envelope"></i></span> </div>
                    </div>
                    <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                        <span class="c_g d-block">contacte nous sur email</span>
                        <span class="d-block c_g fh5co_contact_us_no_text">{{getSetting()->email}}</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-4 py-3">
                <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                    <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                        <div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-map-marker"></i></span> </div>
                    </div>
                    <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                        <span class="c_g d-block">Address</span>
                        <span class="d-block c_g fh5co_contact_us_no_text">{{getSetting()->adress}} </span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="container-fluid mb-4">
    <div class="container">
        <div class="col-12 text-center contact_margin_svnit ">
            <div class="text-center fh5co_heading py-2">Contacte Nous</div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                {!! Form::open(['url'=>'/contact', 'method'=>'POST', 'class="row"'])!!}
              
                    <div class="col-12 py-3">
                        <input type="text" class="form-control fh5co_contact_text_box" placeholder="Nom et Prenom" name="name" />
                    </div>
                    <div class="col-6 py-3">
                        <input type="text" class="form-control fh5co_contact_text_box" placeholder="E-mail" name="email" />
                    </div>
                    <div class="col-6 py-3">
                        <input type="text" class="form-control fh5co_contact_text_box" placeholder="Objet" name="subject" />
                    </div>
                    <div class="col-12 py-3">
                        <textarea class="form-control fh5co_contacts_message" placeholder="Message" name="message"></textarea>
                    </div>
                    <div class="col-12 py-3 text-center"><input type="submit" name="envoyer" class="btn btn-warning" value="Envoyer le Message"></div>
                {!! Form::close() !!}
            </div>
            <div class="col-12 col-md-6 align-self-center">
            </div>
        </div>
    </div>
</div>



@endsection

@section('footer')

@endsection