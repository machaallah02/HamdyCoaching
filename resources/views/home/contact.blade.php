@extends('base')
@section('title', 'contact')
@section('content')

<div class="relative w-full h-screen overflow-hidden flex items-center justify-center">
    <div class="absolute inset-0" style="background-image: url('assets/img/ca11.png'); background-size: cover; background-position: center;"></div>
    <div class="absolute inset-0 flex flex-col items-center justify-center bg-indigo-400 bg-opacity-50">
        <h3 class="text-white p-4 mt-4">Bonjour</h3>
        <h1 class="text-white text-6xl font-bold p-6">Contact<strong class="text-6xl text-blue-500">.</strong></h1>
        <p class="text-white text-center">Contactez-nous pour plus de renseignements sur le coaching pour le business/Dirigeant d'équipe et nos <br> programmes.</p>
        <div class="flex justify-center mt-4">
            <div class="flex flex-col items-center justify-center mx-4">
                <img src="assets/img/loc1.png" alt="" class="w-10 h-10 mb-2 bg-white rounded-full p-2">
                <p class="text-white">Entreprise del'Union non loinde la suprette FIDELITAS</p>
            </div>
            <div class="flex flex-col items-center justify-center mx-4">
                <img src="assets/img/tel.png" alt="" class="w-10 h-10 mb-2 bg-white rounded-full p-2">
                <p class="text-white">+228 <strong>92 31 60 71</strong></p>
            </div>
        </div>
    </div>
</div>
<div>
<!-- Début de widget en ligne Calendly -->
<div class="calendly-inline-widget" data-url="https://calendly.com/machaallahadjibogou/hamdy-coaching" style="min-width:320px;height:700px;"></div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
<!-- Fin de widget en ligne Calendly -->
</div>


@include('home.contact1')
@include('home.equipe1')

@endsection
