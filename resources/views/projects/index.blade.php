<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projets') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    <div class="mb-4">
                        <a href="{{ route('projects.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            {{ __('Ajouter un projet') }}
                        </a>
                    </div>

                    @if($projects->isEmpty())
                        <p class="text-gray-500">{{ __('Aucun projet trouvé') }}</p>
                    @else
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            @foreach($projects as $project)
                                <div class="bg-white border rounded-lg p-4 shadow-sm">
                                    <h3 class="text-lg font-semibold mb-2">{{ $project->title }}</h3>
                                    <p class="text-gray-600 mb-4">{{ $project->description }}</p>
                                    @if($project->link)
                                        <a href="{{ $project->link }}" target="_blank" class="text-blue-600 hover:text-blue-800 mb-4 block">
                                            {{ __('Voir le projet') }}
                                        </a>
                                    @endif
                                    <div class="flex space-x-2">
                                        <a href="{{ route('projects.edit', $project) }}" class="inline-flex items-center px-3 py-1 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                            {{ __('Modifier') }}
                                        </a>
                                        <form action="{{ route('projects.destroy', $project) }}" method="POST" class="inline" onsubmit="return confirm('{{ __('Êtes-vous sûr de vouloir supprimer ce projet ?') }}')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="inline-flex items-center px-3 py-1 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                {{ __('Supprimer') }}
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
