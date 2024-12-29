@if (session('message'))
<div id="modal" class="fixed z-10 inset-0 overflow-y-auto hidden poppins-regular">
    <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" onclick="closeModal()"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
        <div
            id="modal-content"
            class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6 opacity-0 translate-y-4 scale-95">
            <div class="sm:flex sm:items-start">
                <div
                    class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                    <svg class="h-6 w-6 text-green-600" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Pesan
                    </h3>
                    <div class="mt-2">
                        <p class="text-sm leading-5 text-gray-500">
                            {{ session('message') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                <button type="button" onclick="closeModal()"
                    class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-[#E7804F] text-base leading-6 font-medium text-white shadow-sm hover:bg-bg-[#FFA880FF] focus:outline-none focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                    OK
                </button>
            </div>
        </div>
    </div>
</div>
@endif


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const modal = document.getElementById('modal');
        const modalContent = document.getElementById('modal-content');

        if (modal) {
            // Tampilkan modal dengan transisi
            modal.classList.remove('hidden');
            setTimeout(() => {
                modalContent.classList.remove('opacity-0', 'translate-y-4', 'scale-95');
                modalContent.classList.add('opacity-100', 'translate-y-0', 'scale-100');
            }, 10);
        }
    });

    function closeModal() {
        const modal = document.getElementById('modal');
        const modalContent = document.getElementById('modal-content');

        // Sembunyikan modal dengan transisi
        modalContent.classList.remove('opacity-100', 'translate-y-0', 'scale-100');
        modalContent.classList.add('opacity-0', 'translate-y-4', 'scale-95');
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300); // Waktu transisi sesuai dengan Tailwind
    }
</script>
