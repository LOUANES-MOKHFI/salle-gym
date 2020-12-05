@extends('admin.layouts.layout')

@section('title')
administrateur
@endsection



@section('content')

<section class="content">
	<div class="row">
		<h2 class="text-center">Bienvenu chez votre espace de L'administrateur</h2>
        <br>

        <h1 class="text-center">{{getSetting()->site_name}}</h1>
	</div>
	<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>3<sup style="font-size: 15px">services</sup></h3>

              <p>Services de salle</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{url('admin/sitesetting/service')}}" class="small-box-footer">Modifier les services <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>12<sup style="font-size: 15px">images</sup></h3>

              <p>Gallerie d'images</p>
            </div>
            <div class="icon">
              <i class=" fa-picture-o"></i>
            </div>
            <a href="{{url('admin/sitesetting/gallerie')}}" class="small-box-footer">Modifier le gallerie <i class="fa fa-arrow-circle-right"></i></a>
          </div>
      </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{count(membre())}}<sup style="font-size: 15px">membre(s)</sup></h3>
              <p>Liste des Membres</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="{{ url('admin/membre')}}" class="small-box-footer">Liste des membres <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>12<sup style="font-size: 15px">parametres</sup></h3>

              <p>Parametres Des Pages</p>
            </div>
            <div class="icon">
              <i class="fa fa-gears"></i>
            </div>
            <a href="{{url('admin/sitesetting')}}" class="small-box-footer">Modifier les parametres <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

</section>

@endsection