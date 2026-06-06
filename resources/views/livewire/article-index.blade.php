<div class="row min-vh-100 justify-content-center align-items-center">
    <div class="col-12">
        <h2 class="display-6 text-center">
            Tutti i nostri articoli
        </h2>
    </div>
    @foreach ($articles as $article)
        <div class="col-12 col-md-4 mb-4">
            <div class="card mx-auto" style="width: 18rem;">
                <img src="{{ !$article->img ? 'https://picsum.photos/200/200' : Storage::url($article->img) }}" class="card-img-top card-img" alt="Immagine dell'articolo {{ $article->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                </div>
                <div class="row justify-content-around align-items-center">
                    <div class="card-buttons d-flex justify-content-center gap-2 p-3">
                        <a href="{{ route('article.show', compact('article')) }}" class="btn btn-primary">Leggi di più</a>
                        @auth
                            @if (Auth::id() == $article->user->id)
                                <a href="{{ route('article.edit', compact('article')) }}" class="btn btn-primary flex-fill text-center">Modifica l'articolo</a>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
