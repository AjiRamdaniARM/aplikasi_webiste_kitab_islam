<nav id="navbar" class="bg-white w-full lg:px-20 px-5 lg:h-[130px] h-[100px] fixed top-0 left-0 z-50 transition-all duration-300">
    <div class="container mx-auto flex justify-between items-center h-full">
        <div class="logo-assets">
            <img class="w-[31px] h-[60px]" src="{{ asset('guest/assets/logo.svg') }}" alt="logo-website">
        </div>
        <div class="list-menu">
            <ul class="gap-10 lg:flex 2xl:flex md:hidden hidden sm:hidden items-center text-[20px] poppins-medium">
                <li><a href="" class="active poppins-semibold text-[#E67E4D]">{{ __('navigation.Home') }}</a></li>
                <li><a href="">{{ __('navigation.Info') }}</a></li>
                <li><a href="">{{ __('navigation.Infaq') }}</a></li>
                <li><a href="">{{ __('navigation.IlmuHadis') }}</a></li>
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
            <button class="poppins-medium bg-[#B61F2D] flex justify-center items-center text-white gap-3 w-[134px] h-[44px] rounded-[10px] hover:bg-[#920F1CFF]">
                <span><img src="{{ asset('guest/assets/profile.svg') }}" alt="profile-icon"></span>{{ __('navigation.Masuk') }}
            </button>
        </div>
        <div class="nav-container lg:hidden 2xl:hidden relative z-50">
            <input class="checkbox" type="checkbox" name="" id="" />
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>  

            <div class="mobile-menu fixed inset-0 bg-white transform -translate-x-full transition-transform duration-300">
                <div class="flex justify-end p-5">
                    <label for="menu-toggle" class="text-white cursor-pointer text-3xl">&times;</label>
                </div>
                <ul class="flex flex-col items-center justify-center h-full gap-8 text-black text-xl">
                    <li><a href="#">{{ __('navigation.Home') }}</a></li>
                    <li><a href="#">{{ __('navigation.Info') }}</a></li>
                    <li><a href="#">{{ __('navigation.Infaq') }}</a></li>
                    <li><a href="#">{{ __('navigation.IlmuHadis') }}</a></li>
                    <li><a href="#">{{ __('navigation.Bahasa') }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>