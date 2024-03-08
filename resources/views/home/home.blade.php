@extends('base')
@section('title', 'home')

@section('content')

    {{-- <div class="container-fluid relative h-96 overflow-hidden">
        <div class="absolute inset-0 scrolling-images">
            <div class="image" style="background-image: url('assets/img/ca5.png')"></div>
            <div class="image" style="background-image: url('assets/img/ca3.png')"></div>
            <div class="image" style="background-image: url('assets/img/ca11.png')"></div>
        </div>
        <div class="absolute inset-0 flex flex-col items-center justify-center z-20 bg-black bg-opacity-50">
            <h1 class="text-white  text-6xl font-bold">Développer votre <br> entreprise,<br> dépasser vos limites</h1>
            <a href="{{ route('app_contact') }}"><button class="rounded-full bg-blue-500 font-bold text-white m-2 p-3">Prendre un rendez-vous</button></a>
        </div>
    </div> --}}
    <div class="container-fluid">
        <div id="carousel" class="relative overflow-hidden h-96">
            <div id="slides" class="hidden w-full flex ">
                <div class="slide relative bg-cover bg-center flex items-center justify-center text-white text-4xl w-full"
                style="background-image: url('assets/img/ca11.png'); background-size: cover; background-position: center;">
                    <div class="absolute inset-0 flex flex-col items-center justify-center z-20 bg-black bg-opacity-50">
                        <h1 class="text-white text-6xl font-bold text-center">Développer votre <br> entreprise,<br> dépasser
                            vos
                            limites</h1>
                        <a href="{{ route('app_contact') }}"><button
                                class="rounded-full bg-blue-500 font-bold text-white m-2 p-3 text-xl">Prendre un
                                rendez-vous</button></a>
                    </div>
                </div>
                <div class="slide relative bg-cover bg-center flex items-center justify-center text-white text-4xl w-full"
                    style="background-image: url('assets/img/ca11.png');background-size: cover; background-position: center;">
                    <div class="absolute inset-0 bg-black opacity-50"></div>
                    <div class="absolute inset-0 flex flex-col items-center justify-center z-20 bg-black bg-opacity-50">
                        <h1 class="text-white text-6xl font-bold text-center">Atteindre <br> ses objectifs</h1>
                        <a href="{{ route('app_contact') }}"><button
                                class="rounded-full bg-blue-500 font-bold text-white m-2 p-3 text-xl">Prendre un
                                rendez-vous</button></a>
                    </div>


                </div>
                <div class="slide relative bg-cover bg-center flex items-center justify-center text-white text-4xl w-full"
                    style="background-image: url('assets/img/ca3.png');background-size: cover; background-position: center;">
                    <div class="absolute inset-0 bg-black opacity-50"></div>
                    <div class="absolute inset-0 flex flex-col items-center justify-center z-20 bg-black bg-opacity-50">
                        <h1 class="text-white text-6xl font-bold text-center">Développer vos <br> compétences en
                            entreprenariat
                        </h1>
                        <a href="{{ route('app_contact') }}"><button
                                class="rounded-full bg-blue-500 font-bold text-white m-2 p-3 text-xl">Prendre un
                                rendez-vous</button></a>
                    </div>

                </div>

            </div>
            <div id="controls"
                class="absolute top-0 left-0 right-0 flex justify-between px-4 py-2 mt-2 z-20  bg-opacity-50">
                <button id="prevBtn"
                    class="text-white font-bold text-4xl absolute top-1/2 left-0 transform -translate-y-1/2 translate-x-0 p-4">prev</button>
                <button id="nextBtn"
                    class="text-white font-bold text-4xl absolute top-1/2 right-0 transform -translate-y-1/2 translate-x-0 p-4">next</button>
            </div>
        </div>
    </div>




    <div class="container-fluid mx-auto px-4 py-8 bg-gray-300">
        <h1 class="text-4xl font-bold mb-4 text-center">Vous aspirez à plus de plaisir, de sens et de liberté dans votre vie
            professionnelle ?</h1>
        <p class="mb-4 text-center p-4">Aujourd'hui, il est temps de prendre votre vie en main et de concrétiser vos projets
            professionnels pour vous réaliser pleinement.</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-gray-200 hover:bg-gray-400 rounded-full shadow-md p-6">
                <h2 class="text-xl text-center font-bold mb-2">CONFÉRENCES</h2>
            </div>
            <div class="bg-gray-200 hover:bg-gray-400 rounded-full shadow-md p-6">
                <h2 class="text-xl text-center font-bold mb-2">MASTERCLASS</h2>
            </div>
            <div class="bg-gray-200 hover:bg-gray-400 rounded-full shadow-md p-6">
                <h2 class="text-xl text-center font-bold mb-2">FORMATION EN LIGNE</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid mx-auto px-4 py-8 flex flex-row items-center">
        <img src="assets/img/co6.png" alt="Description de l'image" class="w-1/3 mr-2 h-full">
        <div>
            <p class="text-xl mb-4 text-center">En quelques mots...</p>
            <p class="text-gray-700">J'accompagne essentiellement des particuliers qui me contactent pour résoudre une
                situation professionnelle ou personnelle. Mais j'interviens aussi en entreprise pour accompagner les cadres,
                managers et dirigeants.</p>
            <p class="text-xl mb-4 mt-8 font-bold text-center">Qui je coache ?</p>
            <ul class="list-disc list-inside text-gray-700">
                <li>Les femmes et les hommes.</li>
                <li>Les adultes et les jeunes adultes</li>
                <li>En début ou en cours de carrière, en cours d'études</li>
                <li>Avec le coaching en ligne : les personnes qui habitent partout.</li>
            </ul>
            <p class="text-xl mb-4 mt-8 font-bold text-center">Quel coaching pour passer de l'intention à l'action ?</p>
        </div>
    </div>
    <div class="bg-gray-100 p-6 rounded-md shadow-md">
        <h2 class="text-xl font-bold mb-4">Comment décrocher un marché de haut de gamme ?</h2>
        <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat.</p>
    </div>
    @include('home.content1')
    @include('home.temoignage')


@endsection
