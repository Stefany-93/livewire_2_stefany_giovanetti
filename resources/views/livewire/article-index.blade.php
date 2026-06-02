<div class="row min-vh-100 justify-content-center align-items-center">
    @foreach ($articles as $article)
        <div class="col-12 col-md-4 mb-4">
            <div class="card mx-auto" style="width: 18rem;">
                <img src="{{ !$article->img ? 'https://picsum.photos/200/200' : Storage::url($article->img) }}" class="card-img-top card-img" alt="Immagine dell'articolo {{ $article->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <a href="#" class="btn btn-primary">Leggi di più</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
