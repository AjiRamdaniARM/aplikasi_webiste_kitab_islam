<div class="container-card">
    <div class="bg-[#FFB76B] rounded-[24px] p-10">
        <div class="content-body lg:w-96 w-full flex flex-col gap-4">
            <h1 class="uppercase text-white poppins-medium">pengelola data website</h1>
            <h2 class="text-white poppins-bold text-[28px]">Selamat Datang ke Halaman papan pemuka</h2>
            <div class="button-component">
                <button  x-on:click="isModalOpen = true"  class="flex gap-5 poppins-medium text-white bg-black rounded-[24px] px-4 py-3">
                    <h2>Add Status</h2>
                    <div class="icon">
                        <img src="{{ asset('guest/assets/Right circle.svg')}}" alt="icon-panah">
                    </div>
                </button>
            </div>
        </div>
    </div>
</div>

{{-- onclick="showSplashAndRedirect('{{ route('all-data.form') }}')" --}}