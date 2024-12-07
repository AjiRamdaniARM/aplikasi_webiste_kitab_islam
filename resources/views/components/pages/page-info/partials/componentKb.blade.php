<div class="container">
    <div class="grid grid-cols-1 gap-10 lg:px-44 px-2">
        <h1 class="lg:text-[30px] text-2xl text-center poppins-bold">{{ __('kb/language.judul-kb')}}</h1>
        <div class="container bg-white text-justify poppins-regular p-10 rounded-lg">
            <p>{{ __('kb/language.deks_kb')}}</p>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            {{-- === component card 1 === --}}
            <div class="container bg-white rounded-[24px] p-10">
                <div class="head flex flex-col gap-2 ">
                    <img src="{{ asset('guest/assets/image/info/open-book.png')}}" alt="icon-book" class="w-20">
                    <h1 class="poppins-bold text-2xl">{{ __('kb/language.card-text-h1')}}</h1>
                    <p class="poppins-regular text-1xl">{{ __('kb/language.card-text-p')}}</p>
                </div>
            </div>
            {{-- === component card 2 === --}}
            <div class="container bg-white rounded-[24px] p-10">
                <div class="head flex flex-col gap-2 ">
                    <img src="{{ asset('guest/assets/image/info/open-book.png')}}" alt="icon-book" class="w-20">
                    <h1 class="poppins-bold text-2xl">{{ __('kb/language.card-text-h1-pasal2')}}</h1>
                    <p class="poppins-regular text-1xl">{{ __('kb/language.card-text-p-pasal2')}}</p>
                </div>
            </div>
            {{-- === component card 3 === --}}
            <div class="container bg-white rounded-[24px] p-10">
                <div class="head flex flex-col gap-2 ">
                    <img src="{{ asset('guest/assets/image/info/open-book.png')}}" alt="icon-book" class="w-20">
                    <h1 class="poppins-bold text-2xl">{{ __('kb/language.card-text-h1-pasal3')}}</h1>
                    <p class="poppins-regular text-1xl">{{ __('kb/language.card-text-p-pasal3')}}</p>
                </div>
            </div>
        </div>
        <div class="container w-full text-center">
            <button x-on:click="isModalOpen = true"  class="bg-white px-10 py-5 rounded-[24px] poppins-semibold hover:bg-[#920F1C] hover:text-white transition-all">{{ __('kb/language.button-component')}}</button>
        </div>
        @include('components.pages.page-info.partials.template.modal')
    </div>
</div>