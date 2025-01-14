<nav id="sidebar" class="bg-white text-white w-64 h-full fixed lg:relative transform -translate-x-full flex flex-col items-center lg:translate-x-0 sm:-translate-x-full transition-transform duration-300 z-50 ease-in-out">
    <div class="icon-component-sidebar-logo space-y-2 px-4 mt-10 py-10">
      <a href="javascript:void(0);" onclick="showSplashAndRedirect('{{ url('/') }}')" class="transition-all duration-300 ease-in-out">
        <img class="lg:w-full w-10" src="{{ asset('guest/assets/logo.svg') }}" alt="logo-component">
      </a>
      @include('components.guest.partial.scriptNav')
    </div>
    <div class="container-list-navbar flex flex-col gap-10">
      <div class="box-overview">
        <h2 class="uppercase poppins-semibold text-[#848996]">overview</h2>
        <ul class="space-y-2 flex flex-col items-start gap-3 py-4 text-black">
          <li><a href="javascript:void(0);" onclick="showSplashAndRedirect('{{ route('dashboard') }}')" class="active transition-all hover:scale-105 {{ request()->routeIs('dashboard') ? 'poppins-semibold' : 'poppins-medium'}} flex items-center justify-center gap-2">
            <div class="icon" >
              <img src="{{ asset('guest/assets/grid-4.svg')}}" alt="grid-icon">
            </div>
            Dashboard
          </a></li>
          <li><a href="javascript:void(0);" onclick="showSplashAndRedirect('{{ route('all-data') }}')" class="active transition-all hover:scale-105 {{ request()->routeIs('all-data') ? 'poppins-semibold' : 'poppins-medium'}} flex items-center justify-center gap-2">
            <div class="icon">
              <img src="{{ asset('guest/assets/Clip board.svg')}}" alt="grid-icon">
            </div>
            All Data
          </a></li>
        </ul>
      </div>
  
      <div class="box-setting">
        <h2 class="uppercase poppins-semibold text-[#848996]">settings</h2>
        <ul class="space-y-2 flex flex-col items-start gap-3 py-4 text-black">
          <li><a href="#" class="active poppins-semibold flex items-center justify-center gap-2">
            <div class="icon">
              <img src="{{ asset('guest/assets/Settings.svg')}}" alt="grid-icon">
            </div>
            Setting
          </a></li>
          <li><a href="#" class="active poppins-medium flex items-center justify-center gap-2 text-[#B61F2D]">
            <div class="icon">
              <img src="{{ asset('guest/assets/Logout.svg')}}" alt="grid-icon">
            </div>
            Logout
          </a></li>
        </ul>
      </div>
    </div>
   
</nav>