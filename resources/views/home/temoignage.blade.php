{{-- @extends('base')
@section('title', 'Temoignage')

@section('content') --}}
<!DOCTYPE html>
<html>

<head>
    <title>Hamdy</title>
</head>

<body>
    <div class="text-center my-8 ">
        <h1 class="text-3xl font-semibold text-gray-800">Témoignages de clients</h1>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 bg-blue-100 pb-2">
        <!-- Témoignage 1 -->
        @include('home.temoignage1')
        <!-- Témoignage 3 -->
        <div class="max-w-lg mx-auto mt-8 p-6 bg-white rounded-lg shadow-md">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <img class="h-12 w-12 rounded-full" src="/assets/img/ca5.png" alt="Client Avatar">
                    <div class="ml-4">
                        <h2 class="text-lg font-semibold text-gray-800">MachaAllah</h2>
                        <p class="text-sm text-gray-600">Poste / Entreprise</p>
                    </div>
                </div>
                <div class="text-gray-600">
                    <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm0 22c-5.523 0-10-4.477-10-10S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm2-13h-4v6h4v-6zm-6 1h2v4h-2v-4z" />
                    </svg>
                </div>
            </div>
            <div class="mt-4">
                <p class="text-lg text-gray-700 leading-relaxed">
                    "Témoignage du client ici. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam."
                </p>
            </div>
        </div>

        <!-- Témoignage 4 -->
        <div class="max-w-lg mx-auto mt-8 p-6 bg-white rounded-lg shadow-md">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <img class="h-12 w-12 rounded-full" src="/assets/img/ca5.png" alt="Client Avatar">
                    <div class="ml-4">
                        <h2 class="text-lg font-semibold text-gray-800">MachaAllah</h2>
                        <p class="text-sm text-gray-600">Poste / Entreprise</p>
                    </div>
                </div>
                <div class="text-gray-600">
                    <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm0 22c-5.523 0-10-4.477-10-10S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm2-13h-4v6h4v-6zm-6 1h2v4h-2v-4z" />
                    </svg>
                </div>
            </div>
            <div class="mt-4">
                <p class="text-lg text-gray-700 leading-relaxed">
                    "Témoignage du client ici. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam."
                </p>
            </div>
        </div>
    </div>
    <div class=" flex flex-clos items-center justify-center">
        <a href="#"><button
                class="rounded-full bg-indigo-600 hover:bg-blue-700 font-bold text-white m-2 p-3 text">Voir plus de
                témoignages</button></a>
    </div>



</body>

</html>




{{-- @endsection --}}
