@extends('base')
@section('title','équipe')

@section('content')
<div class="container-fluid relative h-96 overflow-hidden">
    <div class="absolute inset-0" style="background-image: url('assets/img/ca11.png'); background-size: cover; background-position: center;"></div>
    <div class="absolute inset-0 flex flex-col items-center justify-center z-20 bg-black bg-opacity-50">
        <h1 class="text-white text-6xl font-bold">Business Coaching</h1>
        <a href="{{ route('app_contact') }}">
            <button class="rounded-full bg-blue-500 font-bold text-white m-2 p-3">Prendre un rendez-vous</button>
        </a>
    </div>
</div>
     <h1>coaching d'équipe</h1>
@endsection
