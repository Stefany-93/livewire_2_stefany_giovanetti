<x-layout>
    <div class="container-fluid min-vh-100 d-flex flex-column justify-content-center">
        <div class="row align-items-center justify-content-center mb-3">
            <div class="col-12 mb-5">
                <h1 class="display-4 text-center">
                    Homepage
                </h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <x-flash-messages />
            </div>
        </div>
        <livewire:article-index>
    </div>
</x-layout>
