<form class="py-3 px-5 shadow rounded text-rosso" enctype="multipart/form-data" wire:submit.prevent="articleUpdate">

    @csrf

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="mb-3">
        <label for="title" class="form-label">
            Nome:
        </label>
        <input type="text" id="title" wire:model="title" class="form-control">
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">
            Descrizione:
        </label>
        <textarea cols="30" rows="10" id="body" wire:model="body" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        @if ($article->img)
            <p class="h5">Vecchia immagine</p>
            <img src="{{ Storage::url($article->img) }}" alt="Immagine di {{ $article->title }}">
        @else
            <p class="text-center fst-italic fw-bold">Questo articolo non ha ancora nessuna immagine</p>
        @endif    
    </div>
    <div class="mb-3">
        <label for="img">
            Inserisci un'immagine:
        </label>
        <input type="file" wire:model="img" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-danger">
            Modifica
        </button>
    </div>

</form>