@extends('layouts.app')

@section('scripts')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"/>

@endsection

@section('styles')
<style>

    .jumbotron {
        position:relative;
        overflow:hidden;
    }

    .jumbotron .container {
        position:relative;
        z-index:5;
        
        background:rgba(0,0,0,0.6);
        padding:4em;
        border:1px solid rgba(0,0,0,0.1);
        border-radius:3px;
    }

    .jumbotron-background {
        background: url("/storage/logo/banner.jpg") no-repeat center;
        background-size:cover;
        font-family: 'object-fit: cover;';
        position:absolute;
        top:0;
        z-index:1;
        width:100%;
        height:100%;
        opacity:0.5;

        
        -webkit-filter: blur(2px);
        filter: blur(2px);
        filter:progid:DXImageTransform.Microsoft.Blur(PixelRadius='4');
    }

    .blur{
        max-width: 100%;
    }

    img.blur {
        -webkit-filter: blur(2px);
        filter: blur(2px);
        filter:progid:DX
        ImageTransform.Microsoft.Blur(PixelRadius='4');
    }

    .parag{
        font-size: 24px;
    }

</style>
@endsection

@section('content')

<div class="jumbotron jumbotron-fluid bg-dark">
  
    <div class="jumbotron-background">
    </div>
  
    <div class="container text-white text-center">
  
        <h1 class="display-4">Mica online shopping</h1>
        <hr class="my-4">
        <p class="parag">Mica is an online shopping website for all products.</p>
        <a class="btn page-btn btn-lg" href="/store" role="button"><i class="fas fa-shopping-cart"> </i> Proceed to Store</a>
        
    </div>
   
</div>

<div class="row m-0 justify-content-center" id="contact">
</div>

@endsection

@section('post-scripts')


@endsection