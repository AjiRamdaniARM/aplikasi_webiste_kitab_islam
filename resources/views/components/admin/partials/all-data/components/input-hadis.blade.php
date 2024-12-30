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

        <div class="mt-7 overflow-x-auto form-input">
            <form action="" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                <div>
                    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
                    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
                    <input type="hidden" name="content_latin" id="quillContent">
                    <div id="editor-hadis">
                    </div>
                    
                    <script>
                   const quill2 = new Quill('#editor-hadis ', {
                    placeholder: 'Masukkan Arti untuk Editor 2',
                    theme: 'snow',
                    });

                    quill2.on('text-change', function() {
                    document.getElementById('quillContent2').value = quill2.root.innerHTML;
                    });
                    </script>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit" class="inline-flex items-center px-6  py-3 bg-[#E67E4D] text-white poppins-semibold text-sm leading-none rounded hover:bg-[#E67E4D]/90 focus:ring-2 focus:ring-offset-2 focus:ring-[#E67E4D]">
                        Simpan Hadist
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
