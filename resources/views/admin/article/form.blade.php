@extends('admin.base')
@section('title', isset($article) ? "Editer un article" : "Creer un article")

@section('content')

    <div class="leading-loose">
        @if (isset($article))
            <form action="{{ route('admin.article.update', $article) }}" method="post" enctype="multipart/form-data"
                class="p-10 bg-white rounded shadow-xl">
                @method('put')
            @else
                <form action="{{ route('admin.article.store') }}" method="post" enctype="multipart/form-data" class="p-10 bg-white rounded shadow-xl">
                    @method('post')
        @endif

        @csrf
            <p class="text-lg text-gray-800 font-medium pb-4">@yield('title')</p>
            <div class="">
                <label class="block text-sm text-gray-600" for="title">Titre</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="title" name="title"
                    type="text" required="" placeholder="The title" aria-label="Title" value="{{ old('title', isset($article) ? $article->title : '') }}">
            </div>
            <div class="mt-2">
                <label class="block text-sm text-gray-600" for="description">Description</label>
                <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="description" name="description"
                    type="text" required="" placeholder="The description" aria-label="Email" value="{{ old('description', isset($article) ? $article->description : '') }}">
            </div>
            <div class="mt-2">
                <label class=" block text-sm text-gray-600" for="auteur">Auteur</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="auteur" name="auteur"
                    type="text" required="" placeholder="Auteur" aria-label="Email" value="{{ old('auteur', isset($article) ? $article->auteur : '') }}">
            </div>
            <div class="mt-2">
                <label class="block text-sm text-gray-600" for="image">Image</label>
                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="image" name="image"
                    type="file" @if(!isset($article->image)) required @endif placeholder="Image" aria-label="image">
            </div>


            <div class="flex justify-center items-center mt-6">
                <button type="submit" class="bg-teal-800 hover:bg-teal-600 text-black rounded py-2 px-4 w-32">
                    @if (isset($article))
                        Modifier
                    @else
                        Créer
                    @endif
                </button>
            </div>
        </form>
    </div>


@endsection
