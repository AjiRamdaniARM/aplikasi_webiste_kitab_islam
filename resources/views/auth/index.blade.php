<x-auth-layout>
    <main x-data="globalState()" class="container mx-auto px-4 sm:px-6 md:px-8 lg:px-10 2xl:px-0 w-full h-auto min-h-screen">
        @include('auth.partial.contentBody')
    </main>
</x-auth-layout>