<x-guest-layout>
    <main class="container relative flex flex-col gap-10 mx-auto px-4 sm:px-6 md:px-8 lg:px-10 2xl:px-0 w-full h-auto min-h-screen">
        <section>
            @include('components.pages.page-info.partials.section-hero.component')
        </section>
        <section>
            @include('components.pages.page-info.partials.section-hero.desk')
        </section>
    </main>
</x-guest-layout>