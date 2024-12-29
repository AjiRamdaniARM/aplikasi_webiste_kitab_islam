<x-admin.layout.admin >
    <main class="grid gap-10 grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-[3fr_2fr]">
        <section class="col-span-1 flex flex-col gap-5">
            @include('components.admin.partials.section_card-dsb')
            @include('components.admin.partials.card-total')
            <div class="component-card flex flex-col gap-4">
                <h1 class="poppins-semibold text-1xl">All Existing Data</h1>
                @include('components.admin.partials.card-component')
            </div>
        </section>
        <section class="col-span-1">
            @include('components.admin.partials.profile')
        </section>
    </main>
</x-admin.layout.admin>

   