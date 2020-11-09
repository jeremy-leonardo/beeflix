<div class="navigation-bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/"><b>Beeflix</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Genres
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach(App\Genre::all() as $genre)
                            <a class="dropdown-item" href="/genre/{{$genre->id}}">{{$genre->name}}</a>
                            @endforeach
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light pt-0">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="{{ url()->previous() }}"><button type="button" class="btn btn-secondary btn-sm" action="action">← Kembali</button></a>
                    <a href="/"><button type="button" class="btn btn-outline-secondary btn-sm">Lihat Semua Film</button></a>
                </li>
            </ul>
        </div>
    </nav>
</div>

{{-- 
<script>
    function back() {
        fallback = '/';
        var prevPage = window.location.href;
        window.history.go(-1);
        setTimeout(function() {
            if (window.location.href == prevPage) {
                window.location.href = fallback;
            }
        }, 500);
    }
</script> --}}
