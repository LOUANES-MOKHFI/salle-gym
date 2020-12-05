@extends('layouts.app')

@section('title')
  Notre Programme
@endsection

@section('header')
  {!! Html::style('designe/assets/css/gallerie.css') !!}
<style type="text/css">
	.img{
		width: 100%;
		height: 100%;
	}
</style>
@endsection
@section('content')

<div class="container page-top">
    <div class="carousel-inner">
        <div class="img">
            <img src="{{url('/storage/'.getSetting()->planning)}}" class="d-block w-100" alt="...">
        </div>
    </div>
</div>

@endsection