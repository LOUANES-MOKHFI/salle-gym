@extends('layouts.app')

@section('title')
  Qui Somme Nous
@endsection

@section('header')
  {!! Html::style('designe/assets/css/gallerie.css') !!}

<style type="text/css">
	.imageinset{
		height: 70px;
		width: 70px;
	}
</style>
@endsection

@section('content')
<div class="container-fluid">
   <div class="container"><br>
   	<h3><strong>{{getSetting()->site_name}}</strong></h3>
	<p style="font-family:italic; font-size: 20px"> {{getSetting()->qui_somme_nous}} </p>
   </div>
	
</div>
<hr>
@endsection