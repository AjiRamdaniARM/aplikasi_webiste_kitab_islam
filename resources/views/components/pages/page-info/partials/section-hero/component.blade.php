<div class="banner-component mt-8 flex justify-center">
    <div class="bg-[#E67E4D] relative w-full lg:h-[450px] h-auto rounded-[24px] px-8 py-10 lg:px-20 2xl:px-44 flex justify-center items-center">
        <div class="particle-bg absolute left-0 bottom-0 z-1 2xl:block lg:block hidden ">
            <img src="{{ asset('guest/assets/assetC.svg')}}" alt="particle-aset">
        </div>
        <div class="body_component z-10 flex flex-col-reverse lg:grid lg:grid-cols-2 gap-2 lg:gap-20 items-center">
            <div class="left-component flex flex-col gap-0">
                <p class="text-[#FFDB79FF] poppins-bold text-2xl lg:text-[30px]">
                    {{ __('info/language.judul-info') }}
                </p>
                <p class="text-white poppins-bold text-lg lg:text-[30px]" >{{ __('info/language.judul-info-2') }}</p>
            </div>
            <div class="right-component flex justify-center lg:justify-end">
                <img src="{{ asset('guest/assets/image/info/rb_2150245556.png') }}" alt="Illustrasi-component" class="max-w-full h-auto">
            </div>
        </div>
    </div>
</div>
