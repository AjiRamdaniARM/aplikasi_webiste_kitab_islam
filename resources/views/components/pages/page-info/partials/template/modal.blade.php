    {{-- === component modal alpine === --}}
    <div
    tabindex="-1"
    x-show="isModalOpen"
    x-on:click.away="isModalOpen = false"
    x-cloak
    x-transition
    class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
    aria-labelledby="modal-title"
    role="dialog"
    aria-modal="true">
        <div class="fixed inset-0 bg-gray-500/75 transition-opacity" aria-hidden="true"></div>
            <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-2xl">
                <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                    <div class="content-paragrap flex flex-col gap-10 poppins-regular text-justify">
                        <p>{{ __('kb/language.paragrap-1') }}</p>
                        <p>{{ __('kb/language.paragrap-2') }}</p>
                        <div class="container">
                            <ul class="flex flex-col gap-3 poppins-regular">
                                <li class="content-list-one">
                                    <div class=" flex items-center gap-5 text-justify">
                                        <!-- Icon -->
                                        <svg class="h-8 w-8 text-red-500 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                            <polyline points="22 4 12 14.01 9 11.01" />
                                        </svg>
                                        <!-- Text -->
                                        <h2 class="flex-1">
                                            {{ __('kb/language.list-1') }}
                                        </h2>
                                    </div>
                                </li>
                                <li class="content-list-one">
                                    <div class=" flex items-center gap-5 text-justify">
                                        <svg class="h-8 w-8 text-red-500 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                            <polyline points="22 4 12 14.01 9 11.01" />
                                        </svg>
                                        <h2 class="flex-1">
                                            {{ __('kb/language.list-2') }}
                                        </h2>
                                    </div>
                                </li>
                                <li class="content-list-one">
                                    <div class=" flex items-center gap-5 text-justify">
                                        <svg class="h-8 w-8 text-red-500 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                            <polyline points="22 4 12 14.01 9 11.01" />
                                        </svg>
                                        <h2 class="flex-1">
                                            {{ __('kb/language.list-3') }}
                                        </h2>
                                    </div>
                                </li>
                                <li class="content-list-one">
                                    <div class=" flex items-center gap-5 text-justify">
                                        <svg class="h-8 w-8 text-red-500 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                            <polyline points="22 4 12 14.01 9 11.01" />
                                        </svg>
                                        <h2 class="flex-1">
                                            {{ __('kb/language.list-4') }}
                                        </h2>
                                    </div>
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button x-on:click="isModalOpen=false" type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto hover:bg-gray-200">{{ __('kb/language.button-modal-keluar')}}</button>
                </div>
                </div>
            </div>
            </div>
    </div>