<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.guest.header')
</head>
<body class="font-sans text-gray-900 antialiased">
    <div class="flex flex-col sm:justify-center items-center lg:px-20">
        @include('components.guest.navigation')
        <div class="w-full mt-[130px]">
            {{ $slot }}
        </div>
    </div>
    @include('components.guest.footerComponent')
</body>
@include('components.guest.footer')
</html>