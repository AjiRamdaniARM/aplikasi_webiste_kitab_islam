<div class="max-w-sm mx-auto p-4">
    <div class="space-y-4">
        @if(Auth::check())
            <div class="w-full py-4 px-10 rounded-[24px] bg-[#FFB76B]">{{ Auth::user()->name }}</div>
        @endif
        @if(Auth::check())
            <div class="w-full py-4 px-10 rounded-[24px] bg-[#FFB76B]">{{ Auth::user()->number_telephone}}</div>
        @endif
        @if(Auth::check())
            <div class="w-full py-4 px-10 rounded-[24px] bg-[#FFB76B]">{{ Auth::user()->email }}</div>
        @endif
        <a href="javascript:void(0);" onclick="showSplashAndRedirect('{{ route('profile.edited', ['username' => Auth::user()->name ]) }}')" >
            <div class="text-center mt-10 text-[#FFB76B] hover:text-[#F3A653FF] poppins-semibold">Edited Profile Akoun</div>
        </a>
    </div>
</div>
