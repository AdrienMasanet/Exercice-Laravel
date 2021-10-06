<div class="container m-auto d-flex justify-content-start flex-wrap">
    @foreach ($articles as $article)
        <div class="p-2 w-25 article-list-element">
            <div class="card shadow-lg">
                <a class="h-100" href="{{ url('articles/' . ($loop->index + 1)) }}">
                    <p class="position-absolute p-3 text-light w-100 text-truncate">{{ $article->title }}</p>
                    <img class="card-img-top h-100 shadow-sm" style="object-fit: cover; border-radius: 15px;" src="{{ $article->image_url }}" alt="">
                </a>
            </div>
        </div>
    @endforeach
</div>
