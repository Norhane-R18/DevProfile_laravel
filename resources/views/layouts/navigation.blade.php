<nav class="bg-white border-b border-gray-200 shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <div class="flex-1"></div>
            
            @auth
                <div class="flex items-center space-x-8">
                    <a href="{{ route('dashboard') }}" class="text-gray-800 hover:text-blue-600 font-semibold">Dashboard</a>
                    <a href="{{ route('skills.index') }}" class="text-gray-800 hover:text-blue-600 font-semibold">Skills</a>
                    <a href="{{ route('projects.index') }}" class="text-gray-800 hover:text-blue-600 font-semibold">Projects</a>
                </div>

                <div class="flex-1 flex justify-end">
                    <div class="relative">
                        <button id="userDropdownButton" class="flex items-center text-gray-800 hover:text-blue-600 focus:outline-none">
                            <span>{{ Auth::user()->name }}</span>
                            <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="userDropdown" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10 hidden">
                            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <div class="flex items-center space-x-4">
                    <a href="{{ route('login') }}" class="text-gray-800 hover:text-blue-600 font-semibold">Se connecter</a>
                    <a href="{{ route('register') }}" class="text-gray-800 hover:text-blue-600 font-semibold">S'inscrire</a>
                </div>
            @endauth
        </div>
    </div>
</nav>

<script>
    // Toggle dropdown menu
    const userDropdownButton = document.getElementById('userDropdownButton');
    const userDropdown = document.getElementById('userDropdown');

    if (userDropdownButton && userDropdown) {
        userDropdownButton.addEventListener('click', () => {
            userDropdown.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!userDropdownButton.contains(e.target) && !userDropdown.contains(e.target)) {
                userDropdown.classList.add('hidden');
            }
        });
    }
</script>
