@extends('base')
@section('title', 'home')

@section('content')
    <div class="relative w-full overflow-x-hidden h-full">
        <div id="slides" class="flex w-full h-full">
            <!-- Première diapositive -->
            <div class="slide relative bg-cover bg-center flex items-center justify-center text-white text-4xl w-full h-96 h-screen"
                style="background-image: url('/assets/img/ca5.png')">
                <div class="absolute inset-0 flex flex-col items-center justify-center z-20 bg-indigo-400 bg-opacity-50">
                    <h1 class="text-white text-4xl font-bold text-center reveal-1">Développer votre <br> entreprise,<br>
                        dépasser
                        vos limites</h1>
                    <p class="text-center text-sm reveal-2">Libérez le potentiel latent de votre entreprise et surpassez vos
                        <br>
                        limites grâce à notre coaching spécialisé. Nous vous guiderons à travers <br> un voyage de
                        croissance, vous aidant à explorer de nouveaux horizons <br> et à atteindre des sommets
                        insoupçonnés.</p>
                    <a href="{{ route('app_contact') }}">
                        <button class="rounded-full bg-indigo-600 font-bold text-white m-2 p-3 text-xl reveal-3">Prendre un
                            rendez-vous</button>
                    </a>
                </div>
            </div>
            <!-- Deuxième diapositive -->
            <div class="slide relative bg-cover bg-center flex items-center justify-center text-white text-4xl w-full h-96 h-screen"
                style="background-image: url('/assets/img/ca11.png')">
                <div
                    class="absolute inset-0 flex flex-col items-center justify-center z-20 bg-indigo-400 bg-opacity-50 reveal">
                    <h1 class="text-white text-6xl font-bold text-center">Atteindre <br> ses objectifs</h1>
                    <p class=" text-center text-sm">Vous avez du mal à atteindre vos objectifs ? Vous avez du mal à bien les
                        definir? <br> Decouvrez nos conseils dans notre article</p>
                    <a href="{{ route('app_blog') }}">
                        <button class="rounded-full bg-indigo-600 font-bold text-white m-2 p-3 text-xl">Voir articles
                        </button>
                    </a>
                </div>
            </div>
            <!-- Troisième diapositive -->
            <div class="slide relative bg-cover bg-center flex items-center justify-center text-white text-4xl w-full h-96 h-screen"
                style="background-image: url('/assets/img/ca3.png')">
                <div class="absolute inset-0 flex flex-col items-center justify-center z-20 bg-indigo-400 bg-opacity-50">
                    <h1 class="text-white text-6xl font-bold text-center">Développer vos <br> compétences en entreprenariat
                    </h1>
                    <p class="text-center text-sm">Explorez de nouveaux territoires entrepreneuriaux et perfectionnez vos
                        compétences grâce à notre programme de développement. Nous vous offrons les outils, <br> les
                        ressources et le soutien nécessaires pour renforcer vos compétences en entrepreneuriat, vous
                        permettant <br>ainsi de naviguer avec confiance dans le monde des affaires.</p>
                    <a href="{{ route('app_contact') }}">
                        <button class="rounded-full bg-indigo-600 font-bold text-white m-2 p-3 text-xl">Prendre un
                            rendez-vous</button>
                    </a>
                </div>
            </div>
        </div>
        <!-- Contrôles du carrousel -->
        <div id="controls" class="static top-0 left-0 right-0 flex justify-between  z-20 bg-opacity-50">
            <button
                id="prevBtn"class="text-white font-bold text-4xl absolute top-1/2 left-0 transform -translate-y-1/2 translate-x-0 p-2 border border-white rounded-full ml-2 hover:scale-105">
                < </button>
                    <button
                        id="nextBtn"class="text-white font-bold text-4xl absolute top-1/2 right-0 transform -translate-y-1/2 translate-x-0 p-2 border border-white rounded-full mr-2 hover:scale-105">></button>
        </div>
    </div>
    <div class="mach-ch container bg-indigo-600 ">
        <div class="flex justify-between p-4">
            <div class="w-1/2">
                <h5 class="text-white font-bold text-sm reveal-1 ">QUI EST HAMDY?</h5>
                <strong class="text-white text-4xl reveal-1">Une vision <br> une mission <br> des engagements.</strong>
            </div>
            <div class="w-1/2">
                <p class="text-white text-center reveal-3">Le souhait de HamdyCoaching est de faire de l'entreprise un lieu
                    de
                    bien-être
                    humain, source de performance économique.
                    En combinant l'expérience de nos coachs avec les systèmes développés par ActionCOACH, notre objectif
                    principal
                    est d'aider chaque entrepreneur(e) qui souhaite développer et structurer son entreprise pour qu'elle
                    soit rentable et fonctionne à terme sans lui (elle).</p>
            </div>
            <a href="{{ route('app_contact') }}">
                <button class=" item-center mach-chh shadow-md text-bold"> -> </button>
            </a>
        </div>
    </div>

    <div class="container px-4 py-8 bg-white mt-16 justify-center">
        <div class="flex justify-between mt-4">
            <a href="{{ route('coaching_equipe') }}" class="no-underline reveal">
                <div class="flex flex-col items-center justify-center mx-8">
                    <img src="assets/img/pro.png" alt="" class="w-10 h-10 mb-2 bg-white rounded-lg p-2">
                    <p class="text-black">Coaching Professionnel</p>
                </div>
            </a>
            <a href="{{ route('coaching_professionnel') }}" class="no-underline reveal">
                <div class="flex flex-col items-center justify-center mx-8">
                    <img src="assets/img/bus.png" alt="" class="w-10 h-10 mb-2 bg-white rounded-lg p-2">
                    <p class="text-black"> Business<strong> Coaching</strong></p>
                </div>
            </a>
        </div>

        <h1 class="text-4xl font-bold mb-4 text-center reveal">Découvrez le chemin vers le succès et une qualité de vie
            enrichie
            grâce à notre coaching d'entreprise . <br> Ensemble, façonnons un avenir prospère et épanoui.</h1>
        <div class="justify-center">
            <img src="assets/img/co4.png" alt="" class="w-full h-54 rounded-lg ">
        </div>
    </div>

    <div class="container reveal">
        <p class="text-sm text-indigo-600">QUI SONT LES COACHS</p>
        <div class=" container bg-white-400 shadow border">
            <div class="flex justify-between p-4">
                <div class="w-1/2 reveal">
                    <h5 class="text-black font-bold text-4xl reveal-1">Les coachs <strong
                            class="text-indigo-600 text-4xl">.</strong>
                    </h5>
                    <p class="text-sm reveal-2">Les coachs de Hamdycoaching partagent la conviction que le talent dans son
                        métier ne
                        suffit pas pour atteindre ses objectifs. Définir et mettre en œuvre une stratégie, mobiliser les
                        équipes, savoir gérer son temps, etc. Nombreuses sont les compétences que les chefs d’entreprises ou
                        les
                        cadres dirigeants doivent apprendre à maîtriser. Depuis plus de 10 ans, nous sommes fiers de les
                        accompagner dans ce parcours avec enthousiasme et de les aider à libérer tout leur potentiel.</p>
                </div>
                <div class="w-1/2 p-4">
                    <div class="mb-2 reveal-1">
                        <p>Experience coaching d'entreprise</p>
                        <hr class="my-2 border-indigo-600 border-t-4">
                    </div>
                    <div class="mb-2 reveal-2">
                        <p>Nombre de clients coachés</p>
                        <hr class="my-2 border-indigo-600 border-t-4">
                    </div>
                    <div class="mb-2 reveal-3">
                        <p>Nombre de formation dispensées</p>
                        <hr class="my-2 border-indigo-600 border-t-4">
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="container mx-auto px-4 py-8 flex flex-row items-center justify-between reveal-1">
        <img src="assets/img/ca1.png" alt="" class="w-1/3 mr-2 h-32">
        <div class="bg-indigo-500 w-2/3 h-1/2 py-32 px-20">
            <a href="{{ route('app_about') }}" class="no-underline">
                <p class="text-black justtify-center text-center">Qui sont <br> les coachs?</p>
            </a>
        </div>
    </div>

    <div class="container">
        <p class="text-indigo-900">Le coach Hamdane</p>
    </div>
    <div class="container justify-center items-center reveal-1">
        <p class="text-sm text-indigo-600 text-center reveal-2">QUELLE EST NOTRE VISION ?</p>
        <p class="text-black font-bold text-4xl text-center">Notre approche <strong
                class="text-indigo-600 text-4xl">.</strong></p>
        <p class="text-sm text-center">Pour un retour sur investissement rapide grâce à des améliorations concrètes sur 6
            domaines clés.</p>
    </div>
    <div class="container-fluid mx-auto flex flex-row items-center justify-between  h-screen border shado ml-2 mr-2 mt-2 pt-2 rounded-lg pb-4 pt-4">
        <div class="w-1/3 h-32 flex flex-col justify-center mr-2">
            <div class="col border bg-hite hover:bg-gray-100 cursor-pointer rounded-md p-4 mb-2 reveal-1 flex" data-target="div1">
                mlmmlf
                <img src="assets/img/gauche.png" alt="" class="w-8 h-8 bg-white rounded-full p-2" id="leftArrow">
                <img src="assets/img/droite.png" alt="" class="w-8 h-8 bg-white rounded-full p-2" id="rightArrow">
            </div>
            <div class="col border bg-hite hover:bg-gray-100 cursor-pointer rounded-md p-4 mb-2 reveal-1 flex" data-target="div2">
                kjfskjs choses
                <img src="assets/img/gauche.png" alt="" class="w-8 h-8 bg-white rounded-full p-2 hidden" id="leftArrow">
                <img src="assets/img/droite.png" alt="" class="w-8 h-8 bg-white rounded-full p-2" id="rightArrow">
            </div>
            <div class="col border bg-hite hover:bg-gray-100 cursor-pointer rounded-md p-4 mb-2 reveal-2 flex" data-target="div3">
                3jjf de faire les
                <img src="assets/img/gauche.png" alt="" class="w-8 h-8 bg-white rounded-full p-2 hidden" id="leftArrow">
                <img src="assets/img/droite.png" alt="" class="w-8 h-8 bg-white rounded-full p-2" id="rightArrow">
            </div>
            <div class="col border bg-hite hover:bg-gray-100 cursor-pointer rounded-md p-4 mb-2 reveal-2 flex" data-target="div4">
                udao kkfq la maniere
                <img src="assets/img/gauche.png" alt="" class="w-8 h-8 bg-white rounded-full p-2 hidden" id="leftArrow">
                <img src="assets/img/droite.png" alt="" class="w-8 h-8 bg-white rounded-full p-2" id="rightArrow">
            </div>
            <div class="col border bg-hite hover:bg-gray-100 cursor-pointer rounded-md p-4 mb-2 reveal-3 flex" data-target="div5">
                faeez bien
                <img src="assets/img/gauche.png" alt="" class="w-8 h-8 bg-white rounded-full p-2 hidden" id="leftArrow">
                <img src="assets/img/droite.png" alt="" class="w-8 h-8 bg-white rounded-full p-2" id="rightArrow">
            </div>
            <div class="col border bg-hite hover:bg-gray-100 cursor-pointer rounded-md p-4 mb-2 reveal-3 flex" data-target="div6">
                6hjhjq avec de bonne
                <img src="assets/img/gauche.png" alt="" class="w-8 h-8 bg-white rounded-full p-2 hidden" id="leftArrow">
                <img src="assets/img/droite.png" alt="" class="w-8 h-8 bg-white rounded-full p-2" id="rightArrow">
            </div>
        </div>
        <div class="w-2/3 h-screen" id="div1">
            <div class="bg-cover bg-center flex items-center justify-center rounded-md "
                style="background-image: url('/assets/img/ca3.png')">
                <div class=" flex flex-col items-center justify-center bg-indigo-400 bg-opacity-50 reveal rounded-md h-screen w-full">
                    <h1 class="text-white text-6xl font-bold text-center">Atteindre<br>ses objectifs</h1>
                    <p class="text-center text-sm text-white">Vous avez du mal à atteindre vos objectifs ? Vous avez du mal à bien les
                        définir?<br> Découvrez nos conseils dans notre article</p>
                </div>
            </div>
        </div>
        <div class=" w-2/3 h-screen  hidden" id="div2">
            <div class="bg-cover bg-center flex items-center justify-center rounded-md "
            style="background-image: url('/assets/img/co2.jpg')">
            <div class=" flex flex-col items-center justify-center bg-indigo-400 bg-opacity-50 reveal rounded-md h-screen w-full">
                <h1 class="text-white text-6xl font-bold text-center">Atteindre<br>ses objectifs</h1>
                <p class="text-center text-sm text-white">Vous avez du mal à atteindre vos objectifs ? Vous avez du mal à bien les
                    définir?<br> Découvrez nos conseils dans notre article</p>
            </div>
        </div>
        </div>
        <div class=" w-2/3 h-screen  hidden" id="div3">
            <div class="bg-cover bg-center flex items-center justify-center rounded-md "
            style="background-image: url('/assets/img/ca1.png')">
            <div class=" flex flex-col items-center justify-center bg-indigo-400 bg-opacity-50 reveal rounded-md h-screen w-full">
                <h1 class="text-white text-6xl font-bold text-center">Atteindre<br>ses objectifs</h1>
                <p class="text-center text-sm text-white">Vous avez du mal à atteindre vos objectifs ? Vous avez du mal à bien les
                    définir?<br> Découvrez nos conseils dans notre article</p>
            </div>
        </div>
        </div>
        <div class=" w-2/3 h-screen  hidden" id="div4">
            <div class="bg-cover bg-center flex items-center justify-center rounded-md "
                style="background-image: url('/assets/img/ca4.png')">
                <div class=" flex flex-col items-center justify-center bg-indigo-400 bg-opacity-50 reveal rounded-md h-screen w-full">
                    <h1 class="text-white text-6xl font-bold text-center">Atteindre<br>ses objectifs</h1>
                    <p class="text-center text-sm text-white">Vous avez du mal à atteindre vos objectifs ? Vous avez du mal à bien les
                        définir?<br> Découvrez nos conseils dans notre article</p>
                </div>
            </div>
        </div>
        <div class=" w-2/3 h-screen  hidden" id="div5">
            <div class="bg-cover bg-center flex items-center justify-center rounded-md "
            style="background-image: url('/assets/img/ca2.png')">
            <div class=" flex flex-col items-center justify-center bg-indigo-400 bg-opacity-50 reveal rounded-md h-screen w-full">
                <h1 class="text-white text-6xl font-bold text-center">Atteindre<br>ses objectifs</h1>
                <p class="text-center text-sm text-white">Vous avez du mal à atteindre vos objectifs ? Vous avez du mal à bien lesugjhjkjkkjkjkjcfcxfmqdzlkmfaj,,d, nffLZEF VBKDLZLKFKoitozoire
                    définir?<br> Découvrez nos conseils dans notre articlekrhhhrkj</p>
            </div>
        </div>
        </div>
        <div class=" w-2/3 h-screen  hidden" id="div6">
            <div class="bg-cover bg-center flex items-center justify-center rounded-md "
            style="background-image: url('/assets/img/ca5.png')">
            <div class=" flex flex-col items-center justify-center bg-indigo-400 bg-opacity-50 reveal rounded-md h-screen w-full">
                <h1 class="text-white text-6xl font-bold text-center">Atteindre<br>ses objectifs</h1>
                <p class="text-center text-sm text-white">Vous avez du mal à atteindre vos objectifs ? Vous avez du mal à bien les
                    définir?<br> Découvrez nos conseils dans notre article</p>
            </div>
        </div>
        </div>
    </div>



    <div class="reveal-1"> @include('home.temoignage1')</div>


@endsection
