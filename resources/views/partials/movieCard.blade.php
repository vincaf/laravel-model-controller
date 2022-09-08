<div class="card m-3" style="width: 18rem;">
    <img src="https://thumbs.dreamstime.com/b/ardesia-di-film-e-bobina-di-film-su-legno-36502412.jpg" class="card-img-top" alt="{{ $movie->title }}">
    <div class="card-body">
        <h5 class="card-title">{{ $movie->title }}</h5>
        <p class="card-text">
            {{ $movie->nationality }} - {{ $movie->vote }}
        </p>
    </div>
</div>