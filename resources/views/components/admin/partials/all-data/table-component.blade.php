<!-- component -->
<div class=" w-full">
    <div class="px-4 md:px-10 py-4 md:py-7">
        <div class="flex items-center justify-between">
            <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">Tasks</p>
            <div class="py-3 px-4 flex items-center text-sm font-medium leading-none text-gray-600 bg-gray-200 hover:bg-gray-300 cursor-pointer rounded">
                <p>Sort By:</p>
                <select aria-label="select" class="focus:text-indigo-600 focus:outline-none bg-transparent ml-1">
                    <option class="text-sm text-indigo-800">Latest</option>
                    <option class="text-sm text-indigo-800">Oldest</option>
                    <option class="text-sm text-indigo-800">Latest</option>
                </select>
            </div>
        </div>
    </div>
    <div class="bg-white py-4 rounded-[24px] md:py-7 px-4 md:px-8 xl:px-10">
        <div class="sm:flex items-center justify-between">
            <div class="flex items-center">
                <a class="rounded-full focus:outline-none focus:ring-2  focus:bg-indigo-50 focus:ring-indigo-800" href=" javascript:void(0)">
                    <div class="py-2 px-8 bg-indigo-100 text-indigo-700 rounded-full">
                        <p>All</p>
                    </div>
                </a>
                <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 ml-4 sm:ml-8" href="javascript:void(0)">
                    <div class="py-2 px-8 text-gray-600 hover:text-indigo-700 hover:bg-indigo-100 rounded-full ">
                        <p>Done</p>
                    </div>
                </a>
                <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 ml-4 sm:ml-8" href="javascript:void(0)">
                    <div class="py-2 px-8 text-gray-600 hover:text-indigo-700 hover:bg-indigo-100 rounded-full ">
                        <p>Pending</p>
                    </div>
                </a>
            </div>
            <button onclick="popuphandler(true)" class="focus:ring-2 focus:ring-offset-2 focus:ring-[#E67E4D] mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-[#E67E4D] hover:bg-[#E67E4D] focus:outline-none rounded">
                <p class="text-sm font-medium leading-none text-white">Add Kitabs</p>
            </button>
        </div>
        <div class="mt-7 overflow-x-auto">
            <table class="w-full whitespace-nowrap">
                <tbody>
                    @foreach ($kitabs as $kitab )
                        <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded">
                            <td>
                                <div class="ml-5 w-8 h-8 bg-[#B61F2D]/90 text-white flex items-center justify-center rounded-full">
                                    1
                                </div>
                            </td>                                    
                            <td class="">
                                <div class="flex items-center pl-5">
                                    <p class="text-base font-medium leading-none text-gray-700 mr-2">{{ $kitab->islamiKitab->name_kitabs}}</p>
                                </div>
                            </td>
                            <td class="pl-5">
                                <button class="py-3 px-3 text-sm focus:outline-none leading-none text-red-700 bg-red-100 rounded">Due today at 18:00</button>
                            </td>
                            <td class="pl-4">
                                <button class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none">View</button>
                            </td>
                            <td>
                                <div class="flex space-x-4 px-5 pt-2">
                                    {{-- component edited icon --}}
                                    <button class="focus:ring-2 focus:ring-[#E67E4D] rounded-md focus:outline-none" onclick="editFunction()" role="button" aria-label="edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M2.5 14.1665V17.4998H5.83333L14.3333 8.99984L11 5.6665L2.5 14.1665Z" stroke="#9CA3AF" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M10.8333 4.8335L13.8333 7.8335" stroke="#9CA3AF" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    {{-- component delete icon --}}
                                    <button class="focus:ring-2 focus:ring-[#E67E4D] rounded-md focus:outline-none" onclick="showSplashAndRedirect('{{ route('all-data.kitabs.delete', ['nama_kitabs' => $kitab->islamiKitab->name_kitabs]) }}')" role="button" aria-label="delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M5 6.6665H15" stroke="#9CA3AF" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M7.5 6.6665V4.1665H12.5V6.6665" stroke="#9CA3AF" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M8.33333 9.1665V13.3332" stroke="#9CA3AF" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M11.6667 9.1665V13.3332" stroke="#9CA3AF" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M5.83333 16.6665H14.1667C14.637 16.6665 15 16.3035 15 15.8332V6.6665H5V15.8332C5 16.3035 5.36301 16.6665 5.83333 16.6665Z" stroke="#9CA3AF" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                            
                        </tr>
                        <tr class="h-3"></tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>               
</div>
    <style>.checkbox:checked + .check-icon {
      display: flex;
    }
    </style>
    <script>
    function editFunction() {
        alert("Edit action triggered!");
        // Tambahkan logika untuk edit di sini
    }

    function deleteFunction() {
        alert("Delete action triggered!");
        // Tambahkan logika untuk delete di sini
    }
    </script>