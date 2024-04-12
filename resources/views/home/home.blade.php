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
                        insoupçonnés.
                    </p>
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
                    <img src="assets/img/pro.png" class="w-10 h-10 mb-2 bg-white rounded-lg p-2">
                    <p class="text-black">Coaching Professionnel</p>
                </div>
            </a>
            <a href="{{ route('coaching_professionnel') }}" class="no-underline reveal">
                <div class="flex flex-col items-center justify-center mx-8">
                    <img src="assets/img/bus.png" class="w-10 h-10 mb-2 bg-white rounded-lg p-2">
                    <p class="text-black"> Business<strong> Coaching</strong></p>
                </div>
            </a>
        </div>

        <h1 class="text-4xl font-bold mb-4 text-center reveal">Découvrez le chemin vers le succès et une qualité de vie
            enrichie
            grâce à notre coaching d'entreprise . <br> Ensemble, façonnons un avenir prospère et épanoui.</h1>
        <div class="justify-center">
            <img src="assets/img/co4.png" class="w-full h-54 rounded-lg ">
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
        <img src="assets/img/homme.png" class="w-64 mr-2 h-64 justify-center">
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
    <div
        class="container-fluid mx-auto flex flex-row items-center justify-between  h-screen border shado ml-2 mr-2 mt-2 pt-2 rounded-lg pb-4 pt-4">
        <div class="w-1/3 h-32 flex flex-col justify-center mr-2">
            <div class="col border bg-hite hover:bg-gray-100 cursor-pointer rounded-md p-4 mb-2 reveal-1 flex"
                data-target="div1">
                mlmmlf
                <img src="assets/img/gauche.png"
                    class="absolute top-1/2 transform -translate-y-1/2 right-0 w-8 h-8 bg-white rounded-full p-2"
                    id="leftArrow">
                <img src="assets/img/droite.png"
                    class="absolute top-1/2 transform -translate-y-1/2 right-0 w-8 h-8 bg-white rounded-full p-2"
                    id="rightArrow">
            </div>
            <div class="col border bg-hite hover:bg-gray-100 cursor-pointer rounded-md p-4 mb-2 reveal-1 flex"
                data-target="div2">
                kjfskjs choses
                <img src="assets/img/gauche.png"
                    class="w-8 h-8 bg-white rounded-full p-2 hidden absolute top-1/2 transform -translate-y-1/2 right-0"
                    id="leftArrow">
                <img src="assets/img/droite.png"
                    class="w-8 h-8 bg-white rounded-full p-2 right-0 absolute top-1/2 transform -translate-y-1/2"
                    id="rightArrow">
            </div>
            <div class="col border bg-hite hover:bg-gray-100 cursor-pointer rounded-md p-4 mb-2 reveal-2 flex"
                data-target="div3">
                3jjf de faire les
                <img src="assets/img/gauche.png"
                    class="w-8 h-8 bg-white rounded-full p-2 hidden right-0 absolute top-1/2 transform -translate-y-1/2"
                    id="leftArrow">
                <img src="assets/img/droite.png"
                    class="w-8 h-8 bg-white rounded-full p-2 right-0 absolute top-1/2 transform -translate-y-1/2"
                    id="rightArrow">
            </div>
            <div class="col border bg-hite hover:bg-gray-100 cursor-pointer rounded-md p-4 mb-2 reveal-2 flex"
                data-target="div4">
                udao kkfq la maniere
                <img src="assets/img/gauche.png"
                    class="w-8 h-8 bg-white rounded-full p-2 hidden right-0 absolute top-1/2 transform -translate-y-1/2"
                    id="leftArrow">
                <img src="assets/img/droite.png"
                    class="w-8 h-8 bg-white rounded-full p-2 right-0 absolute top-1/2 transform -translate-y-1/2"
                    id="rightArrow">
            </div>
            <div class="col border bg-hite hover:bg-gray-100 cursor-pointer rounded-md p-4 mb-2 reveal-3 flex"
                data-target="div5">
                faeez bien
                <img src="assets/img/gauche.png"
                    class="w-8 h-8 bg-white rounded-full p-2 hidden right-0 absolute top-1/2 transform -translate-y-1/2"
                    id="leftArrow">
                <img src="assets/img/droite.png"
                    class="w-8 h-8 bg-white rounded-full p-2 right-0 absolute top-1/2 transform -translate-y-1/2"
                    id="rightArrow">
            </div>
            <div class="col border bg-hite hover:bg-gray-100 cursor-pointer rounded-md p-4 mb-2 reveal-3 flex"
                data-target="div6">
                6hjhjq avec de bonne
                <img src="assets/img/gauche.png"
                    class="w-8 h-8 bg-white rounded-full p-2 hidden right-0 absolute top-1/2 transform -translate-y-1/2"
                    id="leftArrow">
                <img src="assets/img/droite.png"
                    class="w-8 h-8 bg-white rounded-full p-2 right-0 absolute top-1/2 transform -translate-y-1/2"
                    id="rightArrow">
            </div>
        </div>
        <div class="w-2/3 h-screen" id="div1">
            <div class="bg-cover bg-center flex items-center justify-center rounded-md "
                style="background-image: url('/assets/img/ca3.png')">
                <div
                    class=" flex flex-col items-center justify-center bg-indigo-400 bg-opacity-50 reveal rounded-md h-screen w-full">
                    <h1 class="text-white text-6xl font-bold text-center">Atteindre<br>ses objectifs</h1>
                    <p class="text-center text-sm text-white">Vous avez du mal à atteindre vos objectifs ? Vous avez du mal
                        à bien les
                        définir?<br> Découvrez nos conseils dans notre article</p>
                </div>
            </div>
        </div>
        <div class=" w-2/3 h-screen  hidden" id="div2">
            <div class="bg-cover bg-center flex items-center justify-center rounded-md "
                style="background-image: url('/assets/img/co2.jpg')">
                <div
                    class=" flex flex-col items-center justify-center bg-indigo-400 bg-opacity-50 reveal rounded-md h-screen w-full">
                    <h1 class="text-white text-6xl font-bold text-center">Atteindre<br>ses objectifs</h1>
                    <p class="text-center text-sm text-white">Vous avez du mal à atteindre vos objectifs ? Vous avez du mal
                        à bien les
                        définir?<br> Découvrez nos conseils dans notre article</p>
                </div>
            </div>
        </div>
        <div class=" w-2/3 h-screen  hidden" id="div3">
            <div class="bg-cover bg-center flex items-center justify-center rounded-md "
                style="background-image: url('/assets/img/ca1.png')">
                <div
                    class=" flex flex-col items-center justify-center bg-indigo-400 bg-opacity-50 reveal rounded-md h-screen w-full">
                    <h1 class="text-white text-6xl font-bold text-center">Atteindre<br>ses objectifs</h1>
                    <p class="text-center text-sm text-white">Vous avez du mal à atteindre vos objectifs ? Vous avez du mal
                        à bien les
                        définir?<br> Découvrez nos conseils dans notre article</p>
                </div>
            </div>
        </div>
        <div class=" w-2/3 h-screen  hidden" id="div4">
            <div class="bg-cover bg-center flex items-center justify-center rounded-md "
                style="background-image: url('/assets/img/ca4.png')">
                <div
                    class=" flex flex-col items-center justify-center bg-indigo-400 bg-opacity-50 reveal rounded-md h-screen w-full">
                    <h1 class="text-white text-6xl font-bold text-center">Atteindre<br>ses objectifs</h1>
                    <p class="text-center text-sm text-white">Vous avez du mal à atteindre vos objectifs ? Vous avez du mal
                        à bien les
                        définir?<br> Découvrez nos conseils dans notre article</p>
                </div>
            </div>
        </div>
        <div class=" w-2/3 h-screen  hidden" id="div5">
            <div class="bg-cover bg-center flex items-center justify-center rounded-md "
                style="background-image: url('/assets/img/ca2.png')">
                <div
                    class=" flex flex-col items-center justify-center bg-indigo-400 bg-opacity-50 reveal rounded-md h-screen w-full">
                    <h1 class="text-white text-6xl font-bold text-center">Atteindre<br>ses objectifs</h1>
                    <p class="text-center text-sm text-white">Vous avez du mal à atteindre vos objectifs ? Vous avez du mal
                        à bien lesugjhjkjkkjkjkjcfcxfmqdzlkmfaj,,d, nffLZEF VBKDLZLKFKoitozoire
                        définir?<br> Découvrez nos conseils dans notre articlekrhhhrkj</p>
                </div>
            </div>
        </div>
        <div class=" w-2/3 h-screen  hidden" id="div6">
            <div class="bg-cover bg-center flex items-center justify-center rounded-md "
                style="background-image: url('/assets/img/ca5.png')">
                <div
                    class=" flex flex-col items-center justify-center bg-indigo-400 bg-opacity-50 reveal rounded-md h-screen w-full">
                    <h1 class="text-white text-6xl font-bold text-center">Atteindre<br>ses objectifs</h1>
                    <p class="text-center text-sm text-white">Vous avez du mal à atteindre vos objectifs ? Vous avez du mal
                        à bien les
                        définir?<br> Découvrez nos conseils dans notre article</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container justify-center items-center reveal-1 p-8 relative mb-4">
        <p class="text-black font-bold text-4xl text-center p-4">Témoignages <strong
                class="text-indigo-600 text-4xl">.</strong> </p>
        <div class="bg-cover bg-center flex items-center justify-center rounded-md "
            style="background-image: url('/assets/img/ca5.png')">
            <div
                class=" flex flex-col items-center justify-center  reveal-2 bg-indigo-400 bg-opacity-50 rounded-md h-screen w-full">
                <h1 class="text-white text-6xl font-bold text-center">Nos Temoins</h1>
                <p class="text-center text-sm text-white">Vous avez du mal à atteindre vos objectifs ? Vous avez du mal
                    à bien les
                    définir?<br> Découvrez nos conseils dans notre article</p>
                <div class="reveal-3 right-0 bottom-0 ">
                    <div class="carousel-container max-w-lg mx-auto mt-8 p-6 bg-white rounded-lg shadow-md">
                        <div id="testimonial-carousel" class="carousel">
                            <div class="testimonial">
                                <div class="max-w-lg mx-auto mt-8 p-6 bg-white rounded-lg shadow-md">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <img class="h-12 w-12 rounded-full" src="/assets/img/ca5.png"
                                                alt="Client Avatar">
                                            <div class="ml-4">
                                                <h2 class="text-lg font-semibold text-gray-800">MachaAllah</h2>
                                                <p class="text-sm text-gray-600">Poste / Entreprise</p>
                                            </div>
                                        </div>
                                        <div class="text-gray-600">
                                            <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm0 22c-5.523 0-10-4.477-10-10S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm2-13h-4v6h4v-6zm-6 1h2v4h-2v-4z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <p class="text-lg text-gray-700 leading-relaxed">
                                            "Témoignage du client ici.temld jfds c'est la manierer de faire les chose
                                            propremenet par
                                            soi meme et non laisser les autres faire le sal boulot"
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial hidden">
                                <div class="max-w-lg mx-auto mt-8 p-6 bg-white rounded-lg shadow-md">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <img class="h-12 w-12 rounded-full" src="/assets/img/ca5.png"
                                                alt="Client Avatar">
                                            <div class="ml-4">
                                                <h2 class="text-lg font-semibold text-gray-800">MachaAllah</h2>
                                                <p class="text-sm text-gray-600">Poste / Entreprise</p>
                                            </div>
                                        </div>
                                        <div class="text-gray-600">
                                            <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm0 22c-5.523 0-10-4.477-10-10S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm2-13h-4v6h4v-6zm-6 1h2v4h-2v-4z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <p class="text-lg text-gray-700 leading-relaxed">le deuxieme temooignage de la
                                            persone que j'ime le plus dans ma vie et de ma princesse
                                            je pense que maintenat c'est pour les commentaires que j'i fournie pour ce
                                            temoignages
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial hidden">
                                <div class="max-w-lg mx-auto mt-8 p-6 bg-white rounded-lg shadow-md">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <img class="h-12 w-12 rounded-full" src="/assets/img/ca5.png"
                                                alt="Client Avatar">
                                            <div class="ml-4">
                                                <h2 class="text-lg font-semibold text-gray-800">MachaAllah</h2>
                                                <p class="text-sm text-gray-600">Poste / Entreprise</p>
                                            </div>
                                        </div>
                                        <div class="text-gray-600">
                                            <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm0 22c-5.523 0-10-4.477-10-10S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm2-13h-4v6h4v-6zm-6 1h2v4h-2v-4z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <p class="text-lg text-gray-700 leading-relaxed">je erit ce qui me vient par latete
                                            je n'ai pas de compte à rendre à qui que ce soit
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <a href="{{ route('app_temoin') }}">
                        <button class="rounded-full bg-indigo-600 font-bold text-white m-2 p-3 text-xl reveal-3">consultez
                            tous les temoignages</button>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class="container justify-center items-center reveal-1 p-8 relative mb-4">
        <p class="text-black font-bold text-4xl text-center p-4">Programmes <strong
                class="text-indigo-600 text-4xl">.</strong> </p>
        <p class="text-sm text-center">Coaching et formations développées par votre coach ActionCOACH.</p>
        <div class="container justify-center flex ">
            <div class="flip-card m-2">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <p class="title">Business</p>
                        <p>coaching</p>
                    </div>
                    <div class="flip-card-back">
                        <p class="title">Business</p>
                        <p>coaching</p>
                    </div>
                </div>
            </div>
            <div class="flip-card m-2">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <p class="title">Coaching</p>
                        <p> d'équipes de direction</p>
                    </div>
                    <div class="flip-card-back">
                        <p class="title">Coaching</p>
                        <p>Prefessionnel</p>
                    </div>
                </div>
            </div>
            <div class="flip-card m-2">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <p class="title">Formation</p>
                        <p>Anglais</p>
                    </div>
                    <div class="flip-card-back">
                        <p class="title">Formation</p>
                        <p>Anglais</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container justify-center items-center reveal-1 p-8 relative mb-4">
        <p class="text-black font-bold text-4xl text-center p-4">Blog <strong class="text-indigo-600 text-4xl">.</strong>
        </p>
        <p class="text-sm text-center">
            Retrouvez ici tous nos articles sur les principaux enjeux des dirigeants d’entreprise.</p>
        <div class="container justify-center items-center flex p-4 reveal-1">
            <div class="max-w-sm rounded overflow-hidden shadow-lg m-2 p-1">
                <img class="w-full transform hover:scale-125" src="/assets/img/ca5.png" alt="Article Image">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Titre de l'article</div>
                    <p class="text-gray-700 text-base">Description de l'article</p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <span
                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#Date</span>
                    <span
                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#Auteur</span>
                </div>
                <div class="px-6 pt-4 pb-2 justify-center flex">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        En savoir plus
                    </button>
                </div>
            </div>
            <div class="max-w-sm rounded overflow-hidden shadow-lg m-2 p-1">
                <img class="w-full transform hover:scale-125" src="/assets/img/ca5.png" alt="Article Image">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Titre de l'article</div>
                    <p class="text-gray-700 text-base">Description de l'article</p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <span
                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#Date</span>
                    <span
                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#Auteur</span>
                </div>
                <div class="px-6 pt-4 pb-2 justify-center flex">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        En savoir plus
                    </button>
                </div>
            </div>
            <div class="max-w-sm rounded overflow-hidden shadow-lg m-2 p-1">
                <img class="w-full transform hover:scale-125" src="/assets/img/ca5.png" alt="Article Image">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Titre de l'article</div>
                    <p class="text-gray-700 text-base">Description de l'article</p>
                </div>
                <div class="px-6 pt-4 pb-2 ">
                    <span
                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#Date</span>
                    <span
                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#Auteur</span>
                </div>
                <div class="px-6 pt-4 pb-2 justify-center flex">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        En savoir plus
                    </button>
                </div>
            </div>
        </div>
        <div class=" flex items-center justify-center">
            <a href="{{ route('app_temoin') }}">
                <button class="rounded bg-indigo-600 font-bold text-white m-2 p-3 text-xl reveal-3">Voire tous nos
                    articles</button>
            </a>
        </div>
    </div>

    <div class="container justify-center items-center reveal-1 p-8 relative mb-4">
        <p class="text-black font-bold text-4xl text-center p-4">Evenements <strong
                class="text-indigo-600 text-4xl">.</strong>
        </p>
        <p class="text-sm text-center">
            Retrouvez ici tous nos articles sur les principaux enjeux des dirigeants d’entreprise.</p>
        <div class="p-6">
            <div class="relative flex w-80 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md p-4">
                <div
                    class="relative mx-4 -mt-6 h-40 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40 bg-gradient-to-r from-blue-500 to-blue-600">
                </div>
                <div class="p-6">
                    <h5
                        class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                        Tailwind card
                    </h5>
                    <p class="block font-sans text-base font-light leading-relaxed text-inherit antialiased">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc felis ligula.
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <button data-ripple-light="true" type="button"
                        class="select-none rounded-lg bg-blue-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                        Read More
                    </button>
                </div>
            </div>
        </div>

    </div>

@endsection
