<div class="col-lg-4 d-flex align-items-stretch">
    <div class="card shadow-sm m-1">
        <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}">
        <div class="card-body">
            <h5>{{ $article->title }}</h5>
            <p class="card-text small">{{ $article->excerpt }}</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="/blog/{{ $article->id }}"
                       class="btn btn-sm btn-outline-secondary">
                        View
                    </a>
                </div>
                <small class="text-muted">{{\Carbon\Carbon::parse($article->published_at)->format('d/m/Y H:i')}}</small>
            </div>
        </div>
    </div>
</div>
