<x-app-layout>
    <div class="bg-white shadow sm:rounded-lg p-6 max-w-7xl mx-auto">
        <h2 class="text-xl font-bold mb-4 text-gray-900">Ajouter une compétence</h2>

        <div class="flex justify-center">
            <form method="POST" action="{{ route('skills.store') }}" class="w-full max-w-md">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Nom de la compétence</label>
                    <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required>
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
