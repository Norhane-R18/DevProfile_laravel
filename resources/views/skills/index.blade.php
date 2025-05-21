<x-app-layout>
    <h2 class="text-xl font-bold mb-4">Mes compétences</h2>

    <a href="{{ route('skills.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Ajouter compétence</a>

    <ul class="mt-4">
        @foreach($skills as $skill)
            <li class="mb-2">
                {{ $skill->name }}
                <a href="{{ route('skills.edit', $skill) }}">Modifier</a>
                <form method="POST" action="{{ route('skills.destroy', $skill) }}">
                    @csrf @method('DELETE')
                    <button class="text-red-500">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
</x-app-layout>
