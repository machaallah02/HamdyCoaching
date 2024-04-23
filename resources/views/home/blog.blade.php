@extends('base')
@section('title', 'blog')

@section('content')
    <div class="container-fluid relative h-screen overflow-hidden">
        <div class="absolute inset-0"
            style="background-image: url('assets/img/ca11.png'); background-size: cover; background-position: center;"></div>
        <div class="absolute inset-0 flex flex-col items-center justify-center z-20 bg-indigo-400 bg-opacity-50 ">
            <h1 class="text-white text-6xl font-bold">Blogs</h1> <br>
            <strong class="text-white text-2xl"> la mifa </strong>
            <a href="{{ route('app_contact') }}">
                <button class="rounded-full bg-indigo-600 font-bold text-white m-2 p-3">Prendre un rendez-vous</button>
            </a>
        </div>
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
                <button class="mt-4 bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                    onclick="toggleDescription()">Lire plus</button>

            </div>
        </div>
    </div>
    <div class="container justify-center items-center reveal-1 p-8 relative mb-4">
        <p class="text-black font-bold text-4xl text-center p-4">Blog <strong class="text-indigo-600 text-4xl">.</strong></p>
        <p class="text-sm text-center">Retrouvez ici tous nos articles sur les principaux enjeux des dirigeants d’entreprise.</p>

        {{-- Supposons que vous ayez une route qui mène à cette vue et que vous avez passé les articles à cette vue --}}
        <div class="container justify-center items-center flex flex-wrap p-4 reveal-1">
            @foreach ($articles as $article)
                <div class="max-w-sm rounded overflow-hidden shadow-lg m-2 p-1 w-1/3">
                    <img class="w-full transform hover:scale-125" src="{{ Storage::url($article->image) }}" alt="Article Image">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $article->title }}</div>
                        <p class="text-gray-700 text-base">{{ $article->description }}</p>
                    </div>
                    <div class="px-6 pt-4 pb-2 flex justify-center items-center">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">{{ $article->created_at->format('d/m/Y H') }}H</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">{{ $article->auteur }}</span>
                    </div>
                    <div class="px-6 pt-4 pb-2 justify-center flex">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">En savoir plus</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


        <div class=" flex items-center justify-center">
            <a href="{{ route('app_temoin') }}">
                <button class="rounded bg-indigo-600 font-bold text-white m-2 p-3 text-xl reveal-3">Voire tous nos
                    articles</button>
            </a>
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
                <button class="mt-4 bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
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
