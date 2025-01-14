<x-admin.layout.admin>
    <main class="component-table" x-data="{'isModalOpenCreate': false}" x-on:keydown.escape="isModalOpenCreate=false">
        @include('components.admin.partials.all-data.components.modal-create-nameKitabs')
        <section>
            @include('components.admin.partials.all-data.table-component')
        </section>
    </main>
</x-admin.layout.admin>
