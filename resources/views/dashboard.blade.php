<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-6">
                        <h3 class="text-lg font-medium text-gray-900">{{ __('Profil') }}</h3>
                        <div class="mt-4">
                            <p class="text-sm text-gray-600">{{ __('Nom') }}: {{ auth()->user()->name }}</p>
                            <p class="text-sm text-gray-600">{{ __('Email') }}: {{ auth()->user()->email }}</p>
                            <div class="mt-4">
                                <a href="{{ route('profile.show', auth()->user()->username) }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                    {{ __('Voir mon profil public') }}
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="mb-6">
                        <h3 class="text-lg font-medium text-gray-900">{{ __('Projets') }}</h3>
                        <div class="mt-4">
                            @forelse(auth()->user()->projects as $project)
                                <div class="mb-4 p-4 bg-white border border-gray-200 rounded-lg">
                                    <p class="text-sm text-gray-600"><span class="font-medium">{{ __('Titre') }}:</span> {{ $project->title }}</p>
                                    <p class="text-sm text-gray-600 mt-2"><span class="font-medium">{{ __('Description') }}:</span> {{ $project->description }}</p>
                                </div>
                            @empty
                                <p class="text-sm text-gray-600">{{ __('Aucun projet') }}</p>
                            @endforelse
                        </div>
                    </div>

                    <div class="mb-6">
                        <h3 class="text-lg font-medium text-gray-900">{{ __('Compétences') }}</h3>
                        <div class="mt-4">
                            @forelse(auth()->user()->skills as $skill)
                                <div class="mb-4 p-4 bg-white border border-gray-200 rounded-lg">
                                    <p class="text-sm text-gray-600">{{ $skill->name }}</p>
                                </div>
                            @empty
                                <p class="text-sm text-gray-600">{{ __('Aucune compétence') }}</p>
                            @endforelse
                        </div>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a href="{{ route('projects.index') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            {{ __('Gérer les projets') }}
                        </a>
                        <a href="{{ route('skills.index') }}" class="ml-4 inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            {{ __('Gérer les compétences') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
