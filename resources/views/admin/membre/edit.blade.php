@extends('admin.layouts.layout')

@section('title')
 Modifier un membre
@endsection

@section('header')

@endsection

@section('content')

<section class="content-header">
      <h1>
      Modifier le membres {{ $membre->name}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i>Admin</a></li>
        <li class="active"><a href="{{ url('/admin/membre/'.$membre->id.'/edit') }}">Modifier un membres</a></li>
      </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Modifier le membre {{ $membre->name}}</h3>
            </div><br>
  <form method="post" action="{{ url('/admin/membre/'.$membre->id)}}">
                {{ csrf_field()}}                        
 @method('PUT')
  <div class="form-group row">
     <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom et Prenom') }}</label>
        <div class="col-md-6">
           <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $membre->name }}" required autocomplete="name" autofocus placeholder="Nom et Préneom" >
            @error('name')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
   </div>

    <div class="form-group row">
                            <label for="num_tlfn" class="col-md-4 col-form-label text-md-right">{{ __('Télèphone') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('num_tlfn') is-invalid @enderror" name="num_tlfn" value="{{ $membre->num_tlfn}}" required autocomplete="num_tlfn" placeholder="Numero télèphone">

                                @error('num_tlfn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nbr_moi" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de moi payée') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="number" class="form-control @error('nbr_moi') is-invalid @enderror" name="nbr_moi" value="{{ $membre->nbr_moi }}" required autocomplete="nbr_moi" placeholder="Nombre des mois payée">

                                @error('nbr_moi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="montant" class="col-md-4 col-form-label text-md-right">{{ __('Montant') }}</label>

                            <div class="col-md-6">
                                <input id="montant" type="text" class="form-control @error('montant') is-invalid @enderror" name="montant" required placeholder="Montant DA" value="{{$membre->montant}}">
                                <span class="btn btn-default">DA</span>

                                @error('montant')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Modifier') }}
                                </button>
                            </div>
                        </div>


            </form>
      </div>
    </div>
  </div>
</section>

@endsection


@section('footer')

@endsection