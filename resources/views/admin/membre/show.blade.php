@extends('admin.layouts.layout')

@section('title')
Afficher un membre
@endsection

@section('header')

@endsection

@section('content')

<section class="content-header">
      <h1>
      {{ $membre->name}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i>Admin</a></li>
        <li class="active"><a href="{{ url('/admin/membre/'.$membre->id_membre.'/edit') }}">Afficher un membres</a></li>
      </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">le membre {{ $membre->name}}</h3>
            </div><br>
             <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Affiche un membre</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ url('/admin/membre') }}"> Reteur</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom et prenom:</strong>
                {{ $membre->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Télèphone:</strong>
                0{{ $membre->num_tlfn }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Inscrié à</strong>
                {{ $membre->created_at }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre de Moi payée:</strong>
                {{ $membre->nbr_moi }} moi(s)
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Montant payée:</strong>
                {{ $membre->montant }} DA
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Il rest pour payée:</strong>
                {{  (30*$membre->nbr_moi) -$diff = $membre->created_at->diffInDays($now)}} jour(s)<br>
                <br>

            </div>
        </div>
    </div>
      </div>
    </div>
  </div>
</section>

@endsection


@section('footer')

@endsection