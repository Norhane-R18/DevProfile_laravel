<x-app-layout>
    <h2 class="text-xl font-bold mb-4">Modifier le projet</h2>

    <form method="POST" action="{{ route('projects.update', $project) }}">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $project->title }}" class="block mb-2 border" required>
        <textarea name="description" class="block mb-2 border" required>{{ $project->description }}</textarea>
        <input type="url" name="link" value="{{ $project->link }}" class="block mb-2 border">
        <button class="bg-blue-500 text-white px-4 py-2">Mettre à jour</button>
    </form>
</x-app-layout>
