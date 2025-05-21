<x-app-layout>
    <h2 class="text-xl font-bold mb-4">Modifier la compétence</h2>

    <form method="POST" action="{{ route('skills.update', $skill) }}">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $skill->name }}" class="block mb-2 border" required>
        <button class="bg-blue-500 text-white px-4 py-2">Mettre à jour</button>
    </form>
</x-app-layout>
