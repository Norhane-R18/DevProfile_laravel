<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-bold">Profil de {{ $user->name }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-lg font-bold">{{ $user->title }}</h3>
                <p>{{ $user->bio }}</p>

                <h4 class="mt-4 font-semibold">Projets</h4>
                <ul class="list-disc pl-5">
                    @foreach ($user->projects as $project)
                        <li><strong>{{ $project->title }}</strong> - {{ $project->description }}</li>
                    @endforeach
                </ul>

                <h4 class="mt-4 font-semibold">Compétences</h4>
                <ul class="list-disc pl-5">
                    @foreach ($user->skills as $skill)
                        <li>{{ $skill->name }}</li>
                    @endforeach
                </ul>

                <a href="{{ route('pdf.generate', $user->username) }}" class="inline-block mt-4 bg-blue-500 text-white px-4 py-2 rounded">Télécharger CV</a>
            </div>
        </div>
    </div>
</x-app-layout>
