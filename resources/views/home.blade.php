@extends('layouts.app')

@prepend('styles')
<link rel="stylesheet" href="{{asset('css/home.css')}}?key=<?php echo date('d-M-y'); ?>" />
@endprepend

@section('content')

@include('layouts._partials.header')


<div class="container">


    @foreach($genres as $genre)

    <div class="mt-5">
        <h2>
            {{$genre->name}}
        </h2>
        <div class="row">
            @foreach($genre->movies as $movie)
            <div class="col-xl-3 col-md-6 col-12 mt-4">
                <div class="card">
                    <div>
                        <img class="mov-thumbnail" src="{{asset($movie->photo)}}">
                    </div>
                    <div class="m-3 mov-title">
                        <h5>
                            {{$movie->title}}
                        </h5>
                    </div>
                    <div>
                        <button type="button" class="btn btn-primary btn-md btn-block">Lihat Film</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    @endforeach

</div>


@endsection

@section('script')

@endsection
