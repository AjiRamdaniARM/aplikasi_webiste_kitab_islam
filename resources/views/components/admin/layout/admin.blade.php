<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.guest.header')
</head>
<body class="font-sans text-gray-900 antialiased bg-[#F5F5FD]">
    <x-splash-screen />
    <div class="container-modal z-96">
        @include('components.admin.components.modal-notif')
    </div>
    <div class="flex flex-col h-screen">
        <div class="flex flex-1">
            {{-- == component sidebar === --}}
            @include('components.admin.components.sidebar')
            <main class="flex-1 bg-gray-100 p-6 h-screen overflow-y-auto custom-scroll"> 
                {{-- === component header === --}}
                @include('components.admin.components.header')
                <div class="flex flex-col sm:justify-center items-center lg:px-10 px-0">
                    <div class="w-full py-10 ">
                        {{ $slot }}
                    </div>
                </div>
            </main>
        </div> 
    </div>
    
</body>
<script src="{{ asset('guest/js/sidebarAdmin.js')}}"></script>
</html>