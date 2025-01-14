<div class="w-full py-4 md:py-7">
    <div class="bg-white py-4 rounded-[24px] md:py-7 px-4 md:px-8 xl:px-10">
        <div class="sm:flex items-center justify-between">
            <div class="flex items-center">
                <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800" href="javascript:void(0)">
                    <div class="py-2 px-8 bg-[#E67E4D]/20 text-[#E67E4D] rounded-2xl">
                        <p>Form Input Hadits</p>
                    </div>
                </a>
            </div>
        </div>

        <div x-data="postHadist();" x-init="init" class="mt-7 overflow-x-auto form-input">
            <form method="POST" @submit.prevent="submitFormDataHadist"  enctype="multipart/form-data" class="space-y-6">
                @csrf
                <div>
                    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
                    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
                    <input type="hidden" name="hadist" x-model="hadist" id="quillContent2">
                    <div class="box-deskripsi-editor" id="editor-hadis">
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit" 
                    x-bind:disabled="isSubmitting" 
                    class="inline-flex w-full justify-center rounded-md bg-orange-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-orange-500 sm:ml-3 sm:w-auto">
                        <span x-show="!isSubmitting">Simpan Hadist</span>
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
<script>
    const statusPostUrlData = "{{ route('hadist.post', ['id' => $contentKitab->id]) }}";
</script>
<script src="{{asset('admin/JS/HadistPost.js')}}"></script>
