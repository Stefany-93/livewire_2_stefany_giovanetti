<x-layout>

    <div class="container-fluid">
        <div class="row height-custom align-items-center justify-content-center">
            <div class="col-12">
                <h1 class="text-center display-4 title text-rosso">Modifica il tuo articolo</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <livewire:article-edit :article="$article"> 
            </div>
        </div>
    </div>

</x-layout>