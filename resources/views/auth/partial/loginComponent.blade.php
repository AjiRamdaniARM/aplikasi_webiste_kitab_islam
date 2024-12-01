<div x-show="showLogin === 'login' " x-cloak x-transition>
    <div class="content lg:flex justify-center items-center">
        <div class="body-one-component w-full"></div>
        <div class="body-two-component w-full h-full">
            <div class="bg-white rounded-[24px] lg:rounded-[60px]">
                <div class="body-c flex flex-col justify-center items-center gap-10 lg:p-20 py-20 px-10">
                    <div class="logo-branda mx-auto">
                        <img src="{{ asset('guest/assets/logo.svg') }}" alt="Logo Website">
                    </div>
                    <div class="text-c">
                        <h1 class="text-center poppins-semibold lg:text-[36px] text-[20px]">{{ __('auth.judul') }}</h1>
                    </div>
                    <div>
                        <form class="flex flex-col gap-5"  @submit.prevent="submitForm" >
                            <div class="input-component grid gap-2"">
                                <input type="text" name="numberTp" x-model="formData.number" class="border-2 border-[#848996] rounded-[16px] lg:rounded-[24px] p-5 lg:w-[474px] lg:px-10 lg:py-5 poppins-regular" placeholder="{{ __('auth.placeholder1') }}">
                                <p x-show="showError && (!formData.number || formData.number.length < 12 || formData.number.length > 14)" class="text-red-500 text-sm mt-1">{{ __('auth.error-number-required') }}</p>
                            </div>
                            <div class="input-component grid gap-2">
                                <input type="text" x-model="formData.password" class="border-2 border-[#848996] rounded-[16px] lg:rounded-[24px] p-5 lg:w-[474px] lg:px-10 lg:py-5 poppins-regular" placeholder="{{ __('auth.placeholder2') }}">
                                <p x-show="showError && (!formData.password || formData.password.length < 3 || formData.password.length > 100)" class="text-red-500 text-sm mt-1">{{ __('auth.error-password-required') }}</p>
                            </div>
                            <div class="button-component">
                                <button type="submit"  class="bg-[#E67E4D] w-full rounded-[16px] p-5 poppins-semibold hover:bg-[#D16C3DFF]">{{ __('auth.button') }}</button>
                            </div>
                            <div class="component-b-text flex justify-between text-[10px] lg:text-[15px] poppins-regular">
                                <button type="button" @click="moveToOTP()" 
                                  ><span>{{ __('auth.text-button-1') }}</span></button>
                                <button type="button" @click="showLogin = 'forgot' " class="text-[#E67E4D]">
                                   {{ __('auth.text-fp-1') }}
                                </button>
                            </div>
                        </form>
                    </div>
                   
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