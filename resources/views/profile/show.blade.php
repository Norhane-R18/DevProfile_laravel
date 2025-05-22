<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profil de') }} {{ $user->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Profile Information -->
                    <div class="mb-6">
                        <h3 class="text-lg font-medium text-gray-900">{{ __('Informations du profil') }}</h3>
                        <div class="mt-4">
                            <p class="text-sm text-gray-600">{{ __('Nom') }}: {{ $user->name }}</p>
                            <p class="text-sm text-gray-600">{{ __('Email') }}: {{ $user->email }}</p>
                        </div>
                    </div>

                    <!-- Projects Section -->
                    <div class="mb-6">
                        <h3 class="text-lg font-medium text-gray-900">{{ __('Projets') }}</h3>
                        <div class="mt-4 space-y-4">
                            @forelse($projects as $project)
                                <div class="p-4 bg-white border border-gray-200 rounded-lg">
                                    <h4 class="font-medium text-gray-900">{{ $project->title }}</h4>
                                    <p class="mt-1 text-sm text-gray-600">{{ $project->description }}</p>
                                </div>
                            @empty
                                <p class="text-sm text-gray-600">{{ __('Aucun projet') }}</p>
                            @endforelse
                        </div>
                    </div>

                    <!-- Skills Section -->
                    <div class="mb-6">
                        <h3 class="text-lg font-medium text-gray-900">{{ __('Compétences') }}</h3>
                        <div class="mt-4 space-y-4">
                            @forelse($skills as $skill)
                                <div class="p-4 bg-white border border-gray-200 rounded-lg">
                                    <p class="text-sm text-gray-600">{{ $skill->name }}</p>
                                </div>
                            @empty
                                <p class="text-sm text-gray-600">{{ __('Aucune compétence') }}</p>
                            @endforelse
                        </div>
                    </div>

                    <!-- Download CV Button -->
                    <div class="flex items-center justify-end mt-4">
                        <a href="{{ route('pdf.generate', $user->username) }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            {{ __('Télécharger CV') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 