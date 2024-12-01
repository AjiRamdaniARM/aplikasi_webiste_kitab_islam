<div x-data="{ showLogin: 'login' }" class="container mx-auto w-full lg:mt-10">
   {{-- === component login === --}}
   @include('auth.partial.loginComponent')
   {{-- === component forgot password === --}}
   @include('auth.partial.forgotPassword')
   {{-- === component OTP Number === --}}
   @include('auth.partial.OTPPage')
</div>
