<div class="w-full h-auto px-10 py-28 mt-20 rounded-[24px] bg-[#E67E4D] relative">
    <div class="container mx-auto max-w-6xl">
        <div class="box-component-title text-white">
            <h1 class="text-center poppins-black lg:text-[40px] text-[28px]">
                {{ __('content.j-c-bx') }}
            </h1>
            <p class="text-center poppins-regular lg:text-[18px] text-[16px] mt-4">
               {{ __('content.p-c-bx')}}
            </p>
        </div>
    </div>

    {{-- === Kotak pencarian === --}}
    <div class="absolute left-1/2 transform -translate-x-1/2 top-full -mt-20 w-full max-w-[90%] lg:max-w-[90%] bg-white rounded-[16px] flex flex-col gap-5 items-center shadow-[0px_4px_10px_rgba(0,0,0,0.25)] justify-center shadow-md px-6 py-20">
        <div class="container-content-search ">
            <div class="w-full">
               @include('components.guest.box-component-kitab.partial.search-component') 
            </div>
        </div>
        <p class="text-center w-full lg:px-44 poppins-regular text-[16px] lg:text-[18px] mt-4">
           {{ __('content.p2-c-bx')}}
        </p>
    </div>
</div>
