<header class="bg-transparent text-white flex items-center justify-between px-4 py-3 gap-10">
    <!-- Mobile Menu Toggle -->
    <button id="menu-toggle" class="sm:hidden text-black focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>

    <!-- Search Component -->
    <div class="flex-1 mx-4">
        <div class="relative">
            <input 
                type="text" 
                placeholder="Search Your Data" 
                class="w-full px-10 py-3 rounded-full focus:ring-2 text-black focus:ring-orange-500 focus:outline-none shadow-sm border border-gray-300"
            />
            <span class="absolute inset-y-0 left-3 flex items-center">
                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                    <path d="M 13 3 C 7.4889971 3 3 7.4889971 3 13 C 3 18.511003 7.4889971 23 13 23 C 15.396508 23 17.597385 22.148986 19.322266 20.736328 L 25.292969 26.707031 A 1.0001 1.0001 0 1 0 26.707031 25.292969 L 20.736328 19.322266 C 22.148986 17.597385 23 15.396508 23 13 C 23 7.4889971 18.511003 3 13 3 z M 13 5 C 17.430123 5 21 8.5698774 21 13 C 21 17.430123 17.430123 21 13 21 C 8.5698774 21 5 17.430123 5 13 C 5 8.5698774 8.5698774 5 13 5 z">
                    </path>
                </svg>
            </span>
        </div>
    </div>

    <div class="hidden sm:flex items-center gap-6">
        <div class="flex items-center space-x-4">
            <div class="icon bg-transparent border-2 border-gray-300 p-2 rounded-full">
                <img src="{{ asset('guest/assets/info-circle.svg')}}" alt="info-icon" class="h-6 w-6">
            </div>
            <div class="h-6 w-[3px] bg-gray-500"></div>
        </div>
        <div class="flex items-center gap-4 text-black">
            <div class="icon bg-transparent border-2 border-gray-300 p-2 rounded-full">
                <img src="{{ asset('guest/assets/profile.svg')}}" alt="profile-icon" class="h-6 w-6">
            </div>
            <h1 class="text-lg poppins-semibold">Aji Ramdani</h1>
        </div>
    </div>
</header>
