<div class="container m-auto d-flex justify-content-start flex-wrap">
    @foreach ($articles as $article)
        <div class="p-2" style="width: 25%;">
            <div class="card" style="height: 200px;">
                <a class="h-100" href="{{ url('articles/' . ($loop->index + 1)) }}">
                    <p class="position-absolute p-3 text-light w-100 text-truncate" style="background: rgba(0,0,0,.5); text-shadow: 1px 1px 3px rgba(0,0,0,.5)">{{$article->title}}</p>
                    <img class="card-img-top h-100" style="object-fit: cover; box-shadow: 1px 2px 5px rgba(0,0,0,.25);" src="{{ $article->image_url }}" alt="">
                </a>
            </div>
        </div>
    @endforeach
</div>
