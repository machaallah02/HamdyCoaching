@extends('base')
@section('title', 'blog')

@section('content')
    <div class="container-fluid relative h-96 overflow-hidden">
        <div class="absolute inset-0"
            style="background-image: url('assets/img/ca11.png'); background-size: cover; background-position: center;"></div>
        <div class="absolute inset-0 flex flex-col items-center justify-center z-20 bg-black bg-opacity-50">
            <h1 class="text-white text-6xl font-bold">Blogs</h1>
            <a href="{{ route('app_contact') }}">
                <button class="rounded-full bg-blue-500 font-bold text-white m-2 p-3">Prendre un rendez-vous</button>
            </a>
        </div>
    </div>
    <div class="flex items-center justify-center">
        <h1 class=" text-center font-bold bg-white rounded-full absolute p-2">b</h1>
    </div>
    <div class="container-fluid">
        <div class="h-full w-full bg-blue-300 p-16 text-center mb-1 rounded-lg"> blog </div>
        <div class="h-full w-full bg-blue-400 p-16 text-center mb-1 rounded-lg"> blog2 </div>
    </div>

    <div class="w-full max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl mb-2">
        <div class="md:flex">
            <div class="md:flex-shrink-0 transition-transform duration-300 transform hover:scale-125">
                <img class="h-48 w-full object-cover md:h-full md:w-48 " src="assets/img/ca4.png" alt="Image de l'article">
            </div>
            <div class="p-8">
                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Titre de l'article</div>
                <p class="block mt-1 text-lg leading-tight font-semibold text-gray-900">Auteur de l'article</p>
                <p class="mt-2 text-gray-500">Date de création</p>
                <p class="mt-2 text-gray-600 article-description truncate">Description courte de l'article... Lorem ipsum
                    dolor sit amet consectetur adipisicing elit.</p>
                <span class="hidden article-full-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit
                    libero architecto qui, ex unde eum quasi quis perferendis nulla atque ratione nostrum quidem hic
                    voluptatibus recusandae illo laboriosam sapiente iste!</span>
                <button class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                    onclick="toggleDescription()">Lire plus</button>

            </div>
        </div>
    </div>

    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl mb-2">
        <div class="md:flex">
            <div class="md:flex-shrink-0 transition-transform duration-300 transform hover:scale-125">
                <img class="h-48 w-full object-cover md:h-full md:w-48" src="assets/img/ca3.png" alt="Image de l'article">
            </div>
            <div class="p-8">
                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Titre de l'article</div>
                <p class="block mt-1 text-lg leading-tight font-semibold text-gray-900">Auteur de l'article</p>
                <p class="mt-2 text-gray-500">Date de création</p>
                <p class="mt-2 text-gray-600">Description courte de l'article...</p>
                <button class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Lire plus
                </button>
                <p class="mt-2 text-gray-600 hidden">Description complète de l'article...</p>
            </div>
        </div>
    </div>



    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
            <!-- Blog Post 1 -->
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="https://via.placeholder.com/400x200" alt="Placeholder Image">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Titre du Post 1</div>
                    <p class="text-gray-700 text-base">Description du Post 1. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit.</p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <p class="text-gray-700 text-base">Auteur: John Doe</p>
                </div>
            </div>

            <!-- Blog Post 2 -->
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="https://via.placeholder.com/400x200" alt="Placeholder Image">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Titre du Post 2</div>
                    <p class="text-gray-700 text-base">Description du Post 2. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit.</p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <p class="text-gray-700 text-base">Auteur: Jane Smith</p>
                </div>
            </div>

            <!-- Blog Post 3 -->
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="https://via.placeholder.com/400x200" alt="Placeholder Image">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Titre du Post 3</div>
                    <p class="text-gray-700 text-base">Description du Post 3. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit.</p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <p class="text-gray-700 text-base">Auteur: Alex Johnson</p>
                </div>
            </div>
        </div>
    </div>

@endsection
