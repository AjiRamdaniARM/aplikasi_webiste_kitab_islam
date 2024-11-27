<x-guest-layout>
    <main class="container mx-auto px-4 sm:px-6 md:px-8 lg:px-10 2xl:px-0 w-full h-auto min-h-screen">
        <section>
            @include('components.guest.Section_Hero')
        </section>
        <section class="py-20 animate-custom-bounce">
            @include('components.guest.c_logo')
        </section>
        <section>
            @include('components.guest.list_view_data.index')
        </section>
    </main>
</x-guest-layout>