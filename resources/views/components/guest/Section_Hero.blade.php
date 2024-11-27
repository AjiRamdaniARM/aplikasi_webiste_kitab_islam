<div class="banner-component mt-8 flex justify-center">
    <div class="bg-[#E67E4D] w-full lg:h-[450px] h-auto rounded-[24px] px-8 py-10 lg:px-20 2xl:px-44 flex justify-center items-center">
        <div class="body_component flex flex-col-reverse lg:grid lg:grid-cols-2 gap-2 lg:gap-20 items-center">
            <div class="left-component flex flex-col gap-5">
                <p class="text-white poppins-regular text-[15px] lg:text-[18px]">
                    {{ __('content.content-p-1') }}
                </p>
                {{-- component seacrh --}}
                @include('components.guest.c_search')

                {{-- deskripsi dua --}}
                <p class="text-white poppins-light text-[12px]" >{{ __('content.p-2-header') }}</p>

                {{-- icon custom --}}
                <div class="icon-csutom lg:block hidden">
                    <img src="{{asset('guest/assets/icon-custom-1.svg')}}" width="50" alt="icon">
                </div>
                
            </div>
            <div class="right-component flex justify-center lg:justify-end">
                <img src="{{ asset('guest/assets/illus.svg') }}" alt="Illustrasi-component" class="max-w-full h-auto">
            </div>
        </div>
    </div>
</div>
