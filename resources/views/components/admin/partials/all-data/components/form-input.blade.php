<div class="w-full py-4 md:py-7">
    <div class="bg-white py-4 rounded-[24px] md:py-7 px-4 md:px-8 xl:px-10">
        <div class="sm:flex items-center justify-between">
            <div class="flex items-center">
                <a class="rounded-full" href="javascript:void(0)">
                    <div class="py-2 px-8 bg-[#E67E4D]/20 text-[#E67E4D] rounded-2xl">
                        <p>Form Input Kitabs</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="mt-7 overflow-x-auto form-input">
            <form action="" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                <div class="flex flex-col md:flex-row gap-4">
                    <!-- Input Nama Kitab -->
                    <div class="w-full">
                        <label for="nama_kitab" class="block text-sm poppins-semibold py-2 text-gray-700">Rujukan</label>
                        <input type="text" name="nama_kitab" id="nama_kitab" class="mt-1 block w-full border border-gray-300 rounded-2xl shadow-sm focus:border-[#E67E4D]  focus:ring-[#E67E4D] px-5 py-2" placeholder="Masukkan Nama Rujukan" required>
                    </div>

                    <!-- Input Penulis -->
                    <div class="w-full">
                        <label for="halaman" class="block text-sm poppins-semibold py-2 text-gray-700">Halaman</label>
                        <input type="text" name="halaman" id="halaman" class="mt-1 block w-full border border-gray-300 rounded-2xl shadow-sm px-5 py-2 focus:border-[#E67E4D] focus:ring-[#E67E4D]" placeholder="Masukkan Halaman Kitabs" required>
                    </div>
                </div>


                <div class="flex flex-col md:flex-row gap-4">
                    <!-- Input Nama Kitab -->
                    <div class="w-full">
                        <label for="nama_kitab" class="block text-sm poppins-semibold py-2 text-gray-700">Status</label>
                        <select name="nama_kitab" id="nama_kitab" class="mt-1 block w-full border border-gray-300 rounded-2xl shadow-sm focus:border-[#E67E4D] focus:ring-[#E67E4D] px-5 py-2" required>
                            <option value="" disabled selected>Pilih Nama Status</option>
                            @foreach ($status as  $sts )
                                <option value="{{$sts->id}}">{{$sts->name_status}}</option>
                            @endforeach
                        </select>                        
                    </div>

                    <!-- Input Penulis -->
                    <div class="w-full">
                        <label for="halaman" class="block text-sm poppins-semibold py-2 text-gray-700">Masukkan Nama Status Baru</label>
                        <button x-on:click="isModalOpen = true"  type="button" class="mt-1 block w-full border border-gray-300 rounded-2xl shadow-sm px-5 py-2 focus:border-[#E67E4D] focus:ring-[#E67E4D]">Add Status</button>
                    </div>
                </div>


                <!-- Input Arti Arabs -->
                <div>
                    <label for="deskripsi" class="block text-sm poppins-semibold py-2 text-gray-700">Arti Arab</label>
                    @include('components.admin.partials.all-data.components.text-area-custom')
                </div>

                  <!-- Input Arti Arabs -->
                <div>
                    @include('components.admin.partials.all-data.components.text-area-custom-1')
                </div>


                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit" class="inline-flex items-center px-6  py-3 bg-[#E67E4D] text-white poppins-semibold text-sm leading-none rounded hover:bg-[#E67E4D]/90 focus:ring-2 focus:ring-offset-2 focus:ring-[#E67E4D]">
                        Simpan Kitab
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
