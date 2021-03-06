@extends('layouts.app')

@section('title')
  Accueil
@endsection
@section('header')

  {!! Html::style('designe/assets/css/gallerie.css') !!}

<style type="text/css">

    	.imageinset{
		height: 70px;
		width: 70px;
	}
	.w-100,.carousel{
		height: 600px;
	}
</style>
@endsection

@section('content')
 <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="height:500px">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="designe/images/1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="designe/images/2.jpg" class="d-block w-100" alt="...">
            </div>
            <!--https://upload.wikimedia.org/wikipedia/commons/8/8d/Yarra_Night_Panorama%2C_Melbourne_-_Feb_2005.jpg-->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection