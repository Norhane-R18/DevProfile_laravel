<x-app-layout>
    <h2 class="text-xl font-bold mb-4">Ajouter une compétence</h2>

    <form method="POST" action="{{ route('skills.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Ex: Laravel" class="block mb-2 border" required>
        <button class="bg-green-500 text-white px-4 py-2">Enregistrer</button>
    </form>
</x-app-layout>
