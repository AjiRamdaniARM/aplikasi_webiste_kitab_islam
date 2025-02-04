<x-guest-layout>
    <main class="container relative mx-auto px-4 sm:px-6 md:px-8 lg:px-10 2xl:px-0 w-full h-auto min-h-screen">
        <section>
            @include('components.guest.Section_Hero')
        </section>
        <div class="container bg-white border-2 border-black/20 mt-10 rounded-2xl  flex flex-col gap-5 gap-0 py-5 px-5">
            <h1 class="text-2xl">1. Kitab Iman</h1>
            <section class="body">
                @include('components.pages.detail-kitabs.components.component-1')
            </section>
        </div>
    </main>
</x-guest-layout>