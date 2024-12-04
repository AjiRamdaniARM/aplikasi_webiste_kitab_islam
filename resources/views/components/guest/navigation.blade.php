<x-splash-screen />
<nav id="navbar" class="bg-white w-full lg:px-20 px-5 lg:h-[130px] h-[100px] fixed top-0 left-0 z-20 transition-all duration-300">
    <div class="container mx-auto flex justify-between items-center h-full">
        <div class="logo-assets">
            <a href="{{ url('/') }}">
                <img class="w-[31px] h-[60px]" src="{{ asset('guest/assets/logo.svg') }}" alt="logo-website">
            </a>
        </div>
        <div class="list-menu">
            <ul class="gap-10 lg:flex md:hidden hidden items-center text-[20px] poppins-medium">
                <li><a href="{{ route('home.page') }}" class="active poppins-semibold text-[#E67E4D]">{{ __('navigation.Home') }}</a></li>
                <li><a href="#">{{ __('navigation.Info') }}</a></li>
                <li><a href="#">{{ __('navigation.Infaq') }}</a></li>
                <li><a href="#">{{ __('navigation.IlmuHadis') }}</a></li>
                <div class="relative inline-block text-left">
                    {{-- === dropdown menu language --}}
                    <button onclick="toggleDropdown()" class="flex items-center gap-2 px-4 py-2 text-black hover:bg-gray-200 focus:outline-none">
                        {{ __('navigation.Bahasa') }}
                        <span>
                            <img src="{{ asset('guest/assets/dunia.svg') }}" alt="icon-dunia" class="w-5 h-5">
                        </span>
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    {{-- === dropdown menu language === --}}
                    <div id="dropdown" class="hidden animate__animated animate__backInDown absolute right-0 w-48 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg z-10">
                        <ul class="py-1 text-black">
                            <li>
                                <a href="{{ route('change.language', ['lang' => 'en']) }}" class="block px-4 py-2 hover:bg-gray-100">English</a>
                            </li>
                            <li>
                                <a href="{{ route('change.language', ['lang' => 'ms']) }}" class="block px-4 py-2 hover:bg-gray-100">Malaysia</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </ul>
        </div>
        <div class="button-login">
          
            <button onclick="showSplashAndRedirect('{{ url('/login') }}')" class="poppins-medium bg-[#B61F2D] flex justify-center items-center text-white gap-3 w-[134px] h-[44px] rounded-[10px] hover:bg-[#920F1CFF]">
                <span><img src="{{ asset('guest/assets/profile.svg') }}" alt="profile-icon"></span>{{ __('navigation.Masuk') }}
            </button>
        </div>
        <div class="nav-container lg:hidden">
            <button id="menu-toggle" class="hamburger-lines relative z-50">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </button>
        </div>
    </div>
</nav>
{{-- === component mobile nav === --}}
<div id="mobile-menu" class="mobile-menu fixed inset-0 bg-white transform -translate-x-full transition-transform duration-300 z-[100]">
    <div class="flex justify-end p-5">
        <button id="close-menu" class="text-black cursor-pointer text-3xl">&times;</button>
    </div>
    <ul class="flex flex-col items-center justify-center h-full gap-8 text-black text-xl">
        <li><a href="#">{{ __('navigation.Home') }}</a></li>
        <li><a href="#">{{ __('navigation.Info') }}</a></li>
        <li><a href="#">{{ __('navigation.Infaq') }}</a></li>
        <li><a href="#">{{ __('navigation.IlmuHadis') }}</a></li>
        <div class="relative inline-block text-left">
            {{-- === dropdown menu language --}}
            <button onclick="toggleDropdown()" class="flex items-center gap-2 px-4 py-2 text-black hover:bg-gray-200 focus:outline-none">
                {{ __('navigation.Bahasa') }}
                <span>
                    <img src="{{ asset('guest/assets/dunia.svg') }}" alt="icon-dunia" class="w-5 h-5">
                </span>
                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            {{-- === dropdown menu language === --}}
            <div id="dropdown" class="hidden animate__animated animate__backInDown absolute right-0 w-48 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg z-10">
                <ul class="py-1 text-black">
                    <li>
                        <a href="{{ route('change.language', ['lang' => 'en']) }}" class="block px-4 py-2 hover:bg-gray-100">English</a>
                    </li>
                    <li>
                        <a href="{{ route('change.language', ['lang' => 'ms']) }}" class="block px-4 py-2 hover:bg-gray-100">Malaysia</a>
                    </li>
                </ul>
            </div>
        </div>
    </ul>
</div>
@include('components.guest.partial.scriptNav')
