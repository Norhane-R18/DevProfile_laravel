<x-app-layout>
    <h2 class="text-xl font-bold mb-4">Ajouter un projet</h2>

    <form method="POST" action="{{ route('projects.store') }}">
        @csrf
        <input type="text" name="title" placeholder="Titre" class="block mb-2 border" required>
        <textarea name="description" placeholder="Description" class="block mb-2 border" required></textarea>
        <input type="url" name="link" placeholder="Lien (facultatif)" class="block mb-2 border">
        <button class="bg-green-500 text-white px-4 py-2">Enregistrer</button>
    </form>
</x-app-layout>
