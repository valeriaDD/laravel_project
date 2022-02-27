<div class="col-lg-4 d-flex align-items-stretch">
    <div class="card shadow-sm m-1">
        <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}">
        <div class="card-body">
            <h3>{{ $article->title }}</h3>
            <p class="card-text">{{ $article->excerpt }}</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="/blog/{{ $article->id }}"
                       class="btn btn-sm btn-outline-secondary">
                        View
                    </a>
                </div>
                <small class="text-muted">{{ $article->published_at }}</small>
            </div>
        </div>
    </div>
</div>
