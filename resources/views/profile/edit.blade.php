<x-app-layout>
    <h2 class="text-xl font-bold mb-4">Édition du profil</h2>

    @if(session('success'))
        <div class="text-green-600 mb-4">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PUT')

        <label>Nom :</label>
        <input type="text" name="name" value="{{ old('name', $user->name) }}" class="block mb-2 border" required>

        <label>Email :</label>
        <input type="email" name="email" value="{{ old('email', $user->email) }}" class="block mb-2 border" required>

        <label>Titre :</label>
        <input type="text" name="title" value="{{ old('title', $user->title) }}" class="block mb-2 border">

        <label>Bio :</label>
        <textarea name="bio" class="block mb-2 border">{{ old('bio', $user->bio) }}</textarea>

        <label>Username (profil public) :</label>
        <input type="text" name="username" value="{{ old('username', $user->username) }}" class="block mb-2 border" required>

        <button class="bg-blue-500 text-white px-4 py-2 mt-4">Mettre à jour</button>
    </form>
</x-app-layout>
