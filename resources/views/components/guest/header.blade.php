<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Kitab & Hadis</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="{{asset('guest/style/fontGlobal.css')}}">
<link rel="stylesheet" href="{{asset('guest/style/Navigation_Style.css')}}">
<link rel="stylesheet" href="{{asset('guest/style/animate.css')}}">
<link rel="stylesheet" href="{{asset('guest/style/styleCustom.css')}}">
@vite(['resources/css/app.css', 'resources/js/app.js'])
<script src="{{ mix('js/app.js') }}" defer></script>
<script src="{{ mix('css/app.css') }}" defer></script>
<style>
    [x-cloak] {
        display: none !important;
    }
</style>

<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>