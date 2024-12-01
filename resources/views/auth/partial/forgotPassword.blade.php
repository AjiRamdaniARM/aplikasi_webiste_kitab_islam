<div x-show="!showLogin" x-cloak>
    <div class="content lg:flex justify-center items-center">
        <div class="body-one-component w-full"></div>
        <div class="body-two-component w-full h-full">
            <div class="bg-white rounded-[24px] lg:rounded-[60px]">
                <div class="body-c flex flex-col justify-center items-center gap-10 lg:p-20 py-20 px-10">
                    <div class="logo-branda mx-auto">
                        <img src="{{ asset('guest/assets/logo.svg') }}" alt="Logo Website">
                    </div>
                    <div class="text-c">
                        <h1 class="text-center poppins-semibold lg:text-[36px] text-[20px]">{{ __('auth.text-fp') }}</h1>
                    </div>
                    <form class="flex flex-col gap-5">
                        <div class="input-component">
                            <input type="email" class="border-2 border-[#848996] rounded-[16px] lg:rounded-[24px] p-5 lg:w-[474px] lg:px-10 lg:py-5 poppins-regular" placeholder="{{ __('auth.placeholder1') }}">
                        </div>
                        <div class="button-component">
                            <button type="submit" class="bg-[#E67E4D] w-full rounded-[16px] p-5 poppins-semibold hover:bg-[#D16C3DFF]">{{ __('auth.text-button-1') }}</button>
                        </div>
                        <div class="component-b-text flex justify-between text-[10px] lg:text-[15px] poppins-regular">
                            <button type="button" @click="showLogin = true" class="text-[#E67E4D]">
                               {{ __('auth.text-a-login')}}
                            </button>
                        </div>
                    </form>
                    <div class="text-paragrap text-center text-[10px] lg:text-[15px] poppins-regular">
                        <p>{{ __('auth.paragraph1') }}
                            <span class="text-[#E67E4D]">{{ __('auth.paragraph2') }}</span> {{ __('auth.dan') }}
                            <span class="text-[#E67E4D]">{{ __('auth.paragraph3') }}</span> {{ __('auth.paragraph4') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>