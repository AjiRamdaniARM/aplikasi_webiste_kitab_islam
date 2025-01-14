<div class="relative modal-status z-10" role="dialog"
  tabindex="-1"
  x-show="isModalOpenCreate"
  x-on:click.away="isModalOpenCreate = false"
  x-cloak
  x-transition>
    <div class="fixed inset-0 bg-gray-500/75 transition-opacity ease-out duration-300" aria-hidden="true"></div>
    <div id="modal-form" class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-xl transition-all w-full sm:my-8 sm:w-full sm:max-w-lg">
                {{-- === component button === close --}}
                    <button 
                    type="button"
                    @click="isModalOpenCreate = false"
                        class="absolute top-4 right-4 inline-flex items-center justify-center rounded-full p-1 text-gray-400 hover:text-gray-600 focus:outline-none focus:ring-2 focus:ring-orange-500 sm:top-3 sm:right-3"
                        aria-label="Close">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                {{-- === end component button === close --}}
                <div x-data="createKitabs()" x-init="init">
                    <form method="POST" @submit.prevent="submitKitabs" class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                        @csrf
                        <div class="mt-4">
                            <label for="name_kitabs" class="block text-sm font-medium text-gray-700">Name Kitabs</label>
                            <input type="text" x-model="name_kitabs" name="name_kitabs" id="name_kitabs" class="mt-3 block w-full rounded-[10px] border-2 border-gray-500 h-10 px-5 shadow-sm focus:border-orange-500 focus:ring-orange-50 sm:text-sm" required>
                        </div>
                        <div class="bg-gray-50 px-0 py-3 sm:flex sm:flex-row-reverse sm:px-6">
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const statusPostUrlKitabs = "{{ route('kitabs.post') }}";
</script>
<script src="{{asset('admin/JS/postDataKitabs.js')}}"></script>