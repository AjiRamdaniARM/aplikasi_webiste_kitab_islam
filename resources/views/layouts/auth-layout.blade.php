<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.guest.header')
</head>
<body class="font-sans text-gray-900 antialiased bg-custom">
    <div class="flex flex-col sm:justify-center items-center lg:px-20">
        @include('components.guest.navigation')
        <div class="w-full mt-[130px]">
            {{ $slot }}
        </div>
    </div>
</body>
@include('components.guest.footer')
</html>