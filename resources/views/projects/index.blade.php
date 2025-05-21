<x-app-layout>
    <h2 class="text-xl font-bold mb-4">Mes projets</h2>

    <a href="{{ route('projects.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Ajouter projet</a>

    <ul class="mt-4">
        @foreach($projects as $project)
            <li class="mb-2">
                <strong>{{ $project->title }}</strong>
                <p>{{ $project->description }}</p>
                <a href="{{ route('projects.edit', $project) }}">Modifier</a>
                <form method="POST" action="{{ route('projects.destroy', $project) }}">
                    @csrf @method('DELETE')
                    <button class="text-red-500">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
</x-app-layout>
