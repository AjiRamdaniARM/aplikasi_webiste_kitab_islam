<div x-show="showLogin === 'showOTP'" x-cloak x-transition>
    <div class="content lg:flex justify-center items-center">
        <div class="body-one-component w-full"></div>
        <div class="body-two-component w-full h-full">
            <div class="bg-white rounded-[24px] lg:rounded-[60px]">
                <div class="body-c flex flex-col justify-center items-center gap-10 lg:p-20 py-20 px-10">
                    <div class="logo-branda mx-auto">
                        <img src="{{ asset('guest/assets/logo.svg') }}" alt="Logo Website">
                    </div>
                    <div class="text-c">
                        <h1 class="text-center poppins-semibold lg:text-[36px] text-[20px]">{{ __('auth.text-otp-send') }}</h1>
                        <p class="text-center poppins-regular">{{ __('auth.text-otp-desk') }}</p>
                        <div class="text-center poppins-semibold text-[#E67E4D]" x-text="formData.number"></div>
                    </div>
                    <form class="flex flex-col gap-5">
                        <div class="input-component">
                            <div class="bg-gray-100 w-full lg:w-[30em] p-5 rounded-[16px]">
                                <input type="number" placeholder="{{ __('auth.kode-otp-placeholder') }}" class="text-4xl font-bold text-center text-[#E67E4D] bg-transparent border-none focus:ring-0 focus:outline-none w-full">
                            </div>                            
                        </div>
                        <div class="button-component">
                            <button type="submit" class="bg-[#E67E4D] w-full rounded-[16px] p-5 poppins-semibold hover:bg-[#D16C3DFF]">{{ __('auth.button') }}</button>
                        </div>
                        <div class="component-b-text flex justify-between text-[10px] lg:text-[15px] poppins-regular">
                            <button type="button" @click="showLogin = 'login' " class="text-[#E67E4D]">
                                {{ __('auth.text-a-login')}}
                            </button>
                        </div>
                    </form>
                    <div class="text-paragrap text-center text-[10px] lg:text-[15px] poppins-regular">
                        <p>{{ __('auth.resend-text-q') }}
                            <a href="" class="text-[#D16C3DFF] underline"> <span>{{ __('auth.resend-text-a') }}</span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>