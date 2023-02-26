@extends('app')

@section('title', 'Voter | Catmash')

@section('content')

    <div class="home">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-top-10">
                    <ul class="list-inline pull-right">
                        <li class="active"><a href="{{ route('catmash.vote') }}" class="btn btn-sm btn-green">Voter</a></li>
                        <li><a href="#" class="btn btn-sm btn-white">Tous les chats</a></li>
                        <li><a href="{{ route('catmash.home') }}" class="btn btn-sm btn-orange">Home</a></li>
                    </ul>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-top-20">
                    @if (count($images) >= 2)
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            {!! Form::open([
                                'method' => 'PATCH',
                                'class' => 'form-horizontal',
                            ]) !!}
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="winner" id="{{ $images->first()->id }}"
                                    value="{{ $images->first()->id }}"></input>
                                <input type="hidden" class="form-control" name="loser" id="{{ $images->last()->id }}"
                                    value="{{ $images->last()->id }}"></input>
                            </div>
                            <div id="left" class="animated bounceInLeft">
                                <a href="#" class="pickoption">
                                    <div class="view view-first">
                                        <img src="{{ $images->first()->url }}" alt="" width="600"
                                            class="img-responsive">
                                        <div class="mask">
                                            <h2>Rang: {{ $images->first()->rank }}</h2>
                                            <p class="lead">Bio</p>
                                            <table class="table bg-inherit text-center">
                                                <thead>
                                                    <tr></tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><span class="font120">Gagné: {{ $images->first()->wins }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="font120">perdue:
                                                                {{ $images->first()->losses }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="font120">Score:
                                                                {{ $images->first()->score }}</span></td>
                                                    </tr>

                                            </table>
                                        </div>
                                    </div>
                            </div>
                            {!! Form::close() !!}
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            {!! Form::open([
                                'method' => 'PATCH',
                                'class' => 'form-horizontal',
                            ]) !!}
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="winner" id="{{ $images->last()->id }}"
                                    value="{{ $images->last()->id }}"></input>
                                <input type="hidden" class="form-control" name="loser" id="{{ $images->first()->id }}"
                                    value="{{ $images->first()->id }}"></input>
                            </div>
                            <div id="right" class="animated bounceInRight">
                                <a href="#" class="pickoption">
                                    <div class="view view-first">
                                        <img src="{{ $images->last()->url }}" alt="" width="600"
                                            class="img-responsive">
                                        <div class="mask">
                                            <h2>Rang: {{ $images->first()->rank }}</h2>
                                            <p class="lead">Bio</p>
                                            <table class="table bg-inherit text-center">
                                                <thead>
                                                    <tr></tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><span class="font120">Gagné: {{ $images->last()->wins }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="font120">Perdue:
                                                                {{ $images->last()->losses }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="font120">Score:
                                                                {{ $images->last()->score }}</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@stop
