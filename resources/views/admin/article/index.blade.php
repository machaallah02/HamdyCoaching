@extends('admin.base')
@section('title', 'index')

@section('content')
    <div class="container mx-auto my-4">
        <div class="flex justify-between items-center p-4 bg-gray-200">
            <h1 class="text-xl font-bold">@yield('title')</h1>
            <a href="{{ route('admin.article.create') }}"
                class="bg-teal-800 hover:bg-teal-600 text-black font-bold py-2 px-4 rounded">Ajouter un article</a>
        </div>

        <div class="p-4">
            <div class="bg-white shadow-md rounded overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr>
                            <th class="border px-4 py-2">Titre</th>
                            <th class="border px-4 py-2">Description</th>
                            <th class="border px-4 py-2">Auteur</th>
                            <th class="border px-4 py-2">Images</th>
                            <th class="border px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($articles as $article)
                            <tr>
                                <td class="border px-4 py-2">{{ $article->title }}</td>
                                <td class="border px-4 py-2">{{ $article->description }}</td>
                                <td class="border px-4 py-2">{{ $article->auteur }}</td>
                                <td class="border px-4 py-2">
                                    @if ($article->image)
                                        <img src="{{ Storage::url($article->image) }}" alt="Image de l'article"
                                            class="max-w-[100px] h-auto">
                                    @else
                                        Aucune image
                                    @endif
                                </td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('admin.article.edit', $article->id) }}"
                                        class=" px-6 text-blue-500 hover:text-blue-800">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.article.destroy', $article->id) }}" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700 ml-2">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>

                            @empty
                            <tr>
                                <td colspan="5" class="border px-4 py-2 text-center">Aucun article trouvé.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="text-3xl text-black pb-6">Dashboard</h1>

            <div class="flex flex-wrap mt-6">
                <div class="w-full lg:w-1/2 pr-0 lg:pr-2">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-plus mr-3"></i> Monthly Reports
                    </p>
                    <div class="p-6 bg-white">
                        <canvas id="chartOne" width="400" height="200"></canvas>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 pl-0 lg:pl-2 mt-12 lg:mt-0">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-check mr-3"></i> Resolved Reports
                    </p>
                    <div class="p-6 bg-white">
                        <canvas id="chartTwo" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>

            <div class="w-full mt-12">
                <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-list mr-3"></i> Latest Reports
                </p>
                <div class="bg-white overflow-auto">
                    <table class="min-w-full bg-white">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Last name</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Phone</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <tr>
                                <td class="w-1/3 text-left py-3 px-4">Lian</td>
                                <td class="w-1/3 text-left py-3 px-4">Smith</td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                        href="tel:622322662">622322662</a></td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                        href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                            </tr>
                            <tr class="bg-gray-200">
                                <td class="w-1/3 text-left py-3 px-4">Emma</td>
                                <td class="w-1/3 text-left py-3 px-4">Johnson</td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                        href="tel:622322662">622322662</a></td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                        href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

@endsection
