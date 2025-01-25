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
        <div x-data="postData()" x-init="init"  class="mt-7 overflow-x-auto form-input">
            <form method="POST" @submit.prevent="submitFormData" class="space-y-6">
                @csrf
                <!-- Form Group Rujukan dan Rujukan -->
                <div class="flex flex-col md:flex-row gap-4">
                    <!-- Input Nama Kitab -->
                    <div class="w-full">
                        <label for="rujukan" class="block text-sm font-semibold text-gray-700 py-2">Rujukan</label>
                        <div>
                            <input 
                                type="text" 
                                name="rujukan" 
                                id="rujukan" 
                                x-model="rujukan" 
                                class="mt-1 block w-full border border-gray-300 rounded-2xl shadow-sm focus:border-[#E67E4D] focus:ring-[#E67E4D] px-5 py-2" 
                                placeholder="Masukkan Nama Rujukan" 
                                required
                            >
                        </div>
                    </div>
        
                    <!-- Input Halaman -->
                    <div class="w-full"> 
                        <label for="halaman" class="block text-sm font-semibold text-gray-700 py-2">Halaman</label>
                        <input 
                            type="text" 
                            name="halaman" 
                            id="halaman" 
                            x-model="halaman" 
                            class="mt-1 block w-full border border-gray-300 rounded-2xl shadow-sm px-5 py-2 focus:border-[#E67E4D] focus:ring-[#E67E4D]" 
                            placeholder="Masukkan Halaman Kitab" 
                            required
                        >
                    </div> 
                </div>
        
                 <!-- Dropdown Status -->
               <div class="flex flex-col md:flex-row gap-4">
                    <div class="w-full">
                        <label for="status_kitab" class="block text-sm font-semibold text-gray-700 py-2">Status</label>
                        <select 
                            name="id_status" 
                            id="id_status" 
                            x-model = 'id_status'
                            class="mt-1 block w-full border border-gray-300 rounded-2xl shadow-sm focus:border-[#E67E4D] focus:ring-[#E67E4D] px-5 py-2" 
                            required
                        >
                            <option value="" disabled selected>Pilih Nama Status</option>
                            @foreach ($status as $sts)
                                <option value="{{ $sts->id }}">{{ $sts->name_status }}</option>
                            @endforeach
                        </select>                        
                    </div>
                </div> 
                <!-- Input Arti Arab -->
                <div>
                    <!-- Konten lainnya -->
                    <label for="deskripsi" class="block flex w-full justify-between text-sm font-semibold text-gray-700 py-2">Arti Arab <button onclick="toggleModalComponent1();" type="button" class=" hover:scale-105  transition-all px-5 py-0 rounded-md ml-0 flex"> View Full Content Writing <div class="icon ml-2 text-orange-700 bg-orange-500/50 rounded-full w-5 h-5 flex items-center justify-center text-xs">
                        &gt;
                    </div>
                      </button> 
                    </label>
                    @include('components.admin.partials.all-data.components.text-area-custom')
                </div>
        
                <!-- Input Tambahan -->
               <div>
                    @include('components.admin.partials.all-data.components.text-area-custom-1')
                </div>  
                <!-- Submit Button -->
                <div class="flex justify-end">
                    <div x-show="successMessage" 
                    x-transition class="inline-flex w-full justify-center rounded-md bg-green-500/50 px-3 py-2 text-sm font-semibold text-green-800 shadow-sm  sm:ml-3 sm:w-auto">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-5">
                                <path strokeLinecap="round" strokeLinejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>   
                        </span>  
                        <span  x-text="successMessage"></span>
                        &nbsp;
                    </div>
                    <button type="submit" 
                    x-bind:disabled="isSubmitting" 
                    class="inline-flex w-full justify-center rounded-md bg-orange-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-orange-500 sm:ml-3 sm:w-auto">
                        <span x-show="!isSubmitting">Submit</span>
                        <span x-show="isSubmitting" class="flex items-center">
                            <svg class="animate-spin h-5 w-5 text-white mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                            </svg>
                            Loading...
                        </span>
                    </button>
              
                </div>
            </form>
        </div>
        
    </div>
</div>
@include('components.admin.partials.all-data.components.group-modal.modal-c-one')
<script>
    const statusPostUrlData = "{{ route('form_create.post', ['id' => $contentKitab->id]) }}";
</script>
<script src="{{asset('admin/JS/dataPost.js')}}"></script>
 