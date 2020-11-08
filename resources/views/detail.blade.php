@extends('layouts.app')

@prepend('styles')
<link rel="stylesheet" href="{{asset('css/detail.css')}}?key=<?php echo date('d-M-y'); ?>" />
@endprepend

@section('content')

@include('layouts._partials.header')

@section('title')
@parent - {{$movie->title}}
@endsection

<div class="container">


    <div class="row mt-3">
        <div class="col-md-3 col-sm-6 col-12 mt-2">
            <img class="img-fluid" src="{{asset($movie->photo)}}" alt="">
        </div>
        <div class="col-md-4 col-sm-6 col-12 mt-2">
            <h3>
                {{$movie->title}}
            </h3>
            <div class="mb-3">{{$movie->rating}}</div>
            <p>
                {{$movie->description}}
            </p>
            <p>Genre: <a href="/genre/{{$movie->genre->id}}">{{$movie->genre->name}}</a></p>
        </div>
        <div class="col-md-5 col-12 mt-2">

            <h5 class="mb-2">
                EPISODE
            </h5>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Episode</th>
                        <th scope="col">Title</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($episodes as $episode)
                    <tr>
                        <th scope="row">Episode {{ $episode->episode }}</th>
                        <td>{{ $episode->title }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$episodes->links()}}
        </div>
    </div>

</div>


@endsection

@section('script')

@endsection
