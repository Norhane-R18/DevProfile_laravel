<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="text-xl font-bold mb-6 text-center">Édition du profil</h2>

                @if(session('success'))
                    <div class="text-green-600 mb-4 text-center">{{ session('success') }}</div>
                @endif

                <form method="POST" action="{{ route('profile.update') }}" class="max-w-lg mx-auto">
                    @csrf
                    @method('PATCH')

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
                        <input type="text" name="name" value="{{ old('name', $user->name) }}" 
                               class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" name="email" value="{{ old('email', $user->email) }}" 
                               class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Titre</label>
                        <input type="text" name="title" value="{{ old('title', $user->title) }}" 
                               class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Bio</label>
                        <textarea name="bio" rows="4" 
                                  class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('bio', $user->bio) }}</textarea>
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Username (profil public)</label>
                        <input type="text" name="username" value="{{ old('username', $user->username) }}" 
                               class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                    </div>

                    <div class="flex justify-center">
                        <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition duration-200">
                            Mettre à jour
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
