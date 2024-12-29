<div class="container-card-profile">
    <div class="bg-[#FFFFFFFF] rounded-[24px] lg:p-10 px-5">
        <h1 class="poppins-semibold text-lg">Profil Akaun</h1>
        <div class="content-profile mt-10 px-3">
            <a href="{{ asset('admin/profile/'. Auth::user()->profile)}}">
                <img class="border-4  mx-auto w-44 sm:w-48 md:w-56 lg:w-64 xl:w-64 border-[#FFB76B] rounded-full" src="{{ asset('admin/profile/'. Auth::user()->profile)}}" alt="profile">
            </a>
            <div class="content-text text-center mt-10">
                <h1 class="poppins-semibold text-sm sm:text-sm md:text-md lg:text-lg xl:text-xl">WelcomeAdmin❤️</h1>
                <p class="poppins-regular text-sm text-[#777778] mt-2">Anda berada dalam papan pemuka pentadbir</p>
            </div>
        </div>
        <div class="component-profile-input">
            @include('components.admin.partials.component-input-profile')
        </div>
    </div>
</div>