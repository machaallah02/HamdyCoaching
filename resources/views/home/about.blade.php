@extends('base')
@section('title', 'about')

@section('content')
    <div class="container-fluid relative h-screen overflow-hidden">
        <div class="absolute inset-0"
            style="background-image: url('assets/img/ca11.png'); background-size: cover; background-position: center;"></div>
        <div class="absolute inset-0 flex flex-col items-center justify-center z-20 bg-indigo-400 bg-opacity-50">
            <h1 class="text-white text-6xl font-bold">Nous</h1>
            <a href="{{ route('app_contact') }}">
                <button class="rounded-full bg-indigo-600 font-bold text-white m-2 p-3">Prendre un rendez-vous</button>
            </a>
        </div>
    </div>


    <div class="container-fluid mx-auto mt-8 mb-2">
        <h2 class="text-2xl font-bold text-gray-800 mb-2 text-center">KIDE-MOKAFOU Hamdy</h2>
        <p class="text-lg text-gray-600 mb-4  text-center">Moi</p>
        <div class="flex flex-col md:flex-row items-center justify-center bg-white shadow-lg rounded-lg p-6">
            <div class="w-1/4 mr-6">
                <img src="assets/img/ca4.png" alt="Portrait du Coach" class="w-full h-auto rounded-lg object-cover">
                <p class="text-gray-500 text-center italic font-serif ">Hamdy, coach professionnel diplômé</p>
            </div>
            <div class="w-3/4 text-center md:text-left">
                <div class="bg-gray-200 rounded-xl shadow-md p-6 mb-2">
                    <p class="text-blue-400 mb-4 font-bold">Coach professionnel à Lomé et à distance en visio, je vous
                        propose une approche du coaching bienveillante qui ouvre le chemin du changement. Riche de 10 ans
                        d’expérience comme interprète et manager dans les médias, j’aime accompagner la personne dans son
                        développement et son repositionnement professionnel ou personnel.</p>
                </div>
                <div class="bg-gray-200 rounded-xl shadow-md p-6 mb-2">
                    <p class="text-gray-700 mb-4">Je crois fermement en la capacité de chaque individu à exprimer pleinement
                        sa vitalité, à reprendre les rênes de sa vie et à ressentir un bien-être accru, sans être entravé
                        par son environnement ou ses obstacles internes tels que la peur, la routine, les croyances
                        limitantes ou les expériences traumatisantes.</p>
                </div>
                <div class="bg-gray-200 rounded-xl shadow-md p-6 mb-2">
                    <p class="text-gray-700 mb-4">Grâce à une formation approfondie dans des techniques d'accompagnement
                        puissantes, je me suis spécialisé dans le développement de la confiance en soi, une composante
                        essentielle du bien-être humain. Plus précisément, mon travail vise à aider mes clients à renforcer
                        leur confiance en eux-mêmes, à améliorer leur estime personnelle, à mieux gérer leurs émotions et le
                        stress, à perfectionner leurs compétences en communication et en affirmation de soi, ainsi qu'à
                        surmonter les blessures du passé pour avancer sur le chemin de la résilience. Ces domaines sont
                        souvent ceux où les premiers résultats du coaching peuvent se manifester rapidement.</p>
                </div>
                <div class="bg-gray-200 rounded-xl shadow-md p-6 mb-2">
                    <p class="text-red-500 mb-4 font-bold">Que ce soit en ligne via des Meets ou en présentiel à Lomé, je
                        suis là pour accompagner mes clients dans les objectifs suivants :</p>
                    <ul class="list-disc list-inside mb-4">
                        <li>Surmonter une situation complexe ou bloquée</li>
                        <li>Accélérer le processus de changement pour trouver leur juste place dans la vie</li>
                        <li>Donner vie à leurs aspirations et concrétiser leurs désirs</li>
                        <li>Cultiver un bien-être intérieur plus profond</li>
                        <li>Retrouver du sens et se reconnecter avec leurs valeurs fondamentales</li>
                        <li>En résumé, les aider à s'épanouir pleinement dans tous les aspects de leur vie.</li>
                    </ul>
                </div>
                <p class="text-gray-700 mb-4">Besoin d'aide ou de conseils ? N'hésitez pas à me contacter !</p>
            </div>
        </div>
    </div>
    @include('home.coach')
@endsection
