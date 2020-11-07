@extends('layouts.app')

@prepend('styles')
    <link rel="stylesheet" href="{{asset('css/home/index.css')}}?key=<?php echo date('d-M-y'); ?>" />
@endprepend

@section('content')

@include('layouts._partials.header')


<div class="container">
    Home
</div>


@endsection

@section('script')

@endsection