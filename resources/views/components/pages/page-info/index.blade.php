<x-guest-layout>
    <body class="main-container" x-data="{ isModalOpen: false }" x-bind:class="{ 'overflow-hidden': isModalOpen }">
        <div class="container relative flex flex-col gap-10 mx-auto px-4 sm:px-6 md:px-8 lg:px-10 2xl:px-0 w-full h-auto">
            <section>
                @include('components.pages.page-info.partials.section-hero.component')
            </section>
            <section>
                @include('components.pages.page-info.partials.desk')
            </section> 
        </div>
      <div class="bg-[#E3E2E2] rounded-[24px] mt-20">
        <section class="container relative flex flex-col gap-10 mx-auto px-4 sm:px-6 md:px-8 lg:px-10 2xl:px-0 w-full h-auto  py-20">
            @include('components.pages.page-info.partials.componentKb')
        </section>
      </div>
        <section>
        @include('components.pages.page-info.partials.pageMTP')
        </section>

        <section>
            @include('components.pages.page-info.partials.pageKos')
        </section>
    </body>
    <script src="{{ asset('guest/js/chart.js') }}"></script>
</x-guest-layout>