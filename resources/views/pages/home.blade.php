@extends('app')

@section('title', 'Home | Catmash')

@section('content')

    <div class="home">
        <div class="container">
            <div class="row text-center vh-align">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jumbotron bg-inherit text-white">
                        <div class="container">
                            <h1 class="khand"><span class="font150">CAT<span class="text-orange">MASH</span>
                            </h1>
                            <p>Trouver le chat le plus mignon.</p>
                            <p class="text-uppercase montserrat ">
                                <a href="{{ route('catmash.vote') }}" class="btn btn-green">Voter</a>
                                <a href="#" class="btn btn-white">Tous les chats</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
