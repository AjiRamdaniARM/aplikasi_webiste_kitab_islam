<nav id="navbar" class="bg-white w-full lg:px-20 px-5 lg:h-[130px] h-[100px] fixed top-0 left-0 z-50 transition-all duration-300">
    <div class="container mx-auto flex justify-between items-center h-full">
        <div class="logo-assets">
            <img class="w-[31px] h-[60px]" src="{{ asset('guest/assets/logo.svg') }}" alt="logo-website">
        </div>
        <div class="list-menu">
            <ul class="gap-10 lg:flex md:hidden hidden items-center text-[20px] poppins-medium">
                <li><a href="#" class="active poppins-semibold text-[#E67E4D]">{{ __('navigation.Home') }}</a></li>
                <li><a href="#">{{ __('navigation.Info') }}</a></li>
                <li><a href="#">{{ __('navigation.Infaq') }}</a></li>
                <li><a href="#">{{ __('navigation.IlmuHadis') }}</a></li>
            </ul>
        </div>
        <div class="button-login">
            <x-splash-screen />
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
        <li><a href="#">{{ __('navigation.Bahasa') }}</a></li>
    </ul>
</div>
@include('components.guest.partial.scriptNav')
