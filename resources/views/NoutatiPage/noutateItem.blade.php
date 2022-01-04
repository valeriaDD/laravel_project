
<div class="card border-success mt-5 mb-5">
    <img class="card-img-top" src="../article_img/{{ $article->image }}" alt="img-fluid">
    <div class="card-body">
        <h5 class="card-title">{{ $article->title }}</h5>
        <p class="card-text">{{ $article->excerpt }}</p>
        <div class="row">
            <div class="col">
                <a href="{{ route('article') }}" class="nav-link px-2 link-success">Afla mai multe</a>
            </div>
            <div class="col text-end">
                {{ $article->published_at }}
            </div>
        </div>
       
    </div>
</div>

