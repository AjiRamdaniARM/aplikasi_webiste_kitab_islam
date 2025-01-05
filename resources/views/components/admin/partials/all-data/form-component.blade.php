<x-admin.layout.admin>
    <main class="component-table" x-data="{'isModalOpen': false}" x-on:keydown.escape="isModalOpen=false">
        <livewire:status-form />
        <section>
            @include('components.admin.partials.all-data.components.card-head')
        </section>
        <section>
            @include('components.admin.partials.all-data.components.form-input')
        </section>
        <section>
            @include('components.admin.partials.all-data.components.input-hadis')
        </section>
    </main>
    
</x-admin.layout.admin>