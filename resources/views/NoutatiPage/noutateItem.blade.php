
<div class="card border-success mt-5 mb-5">
    <img class="card-img-top" src="{{ $article->image }}" alt="card-img-top img-fluid">
    <div class="card-body">
        <h5 class="card-title">{{ $article->title }}</h5>
        <p class="card-text">{{ $article->excerpt }}</p>
        <a href="{{ route('article') }}" class="nav-link px-2 link-success">Afla mai multe</a>
    </div>
</div>

