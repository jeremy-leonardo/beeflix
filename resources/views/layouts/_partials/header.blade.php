<div class="navigation-bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand text-danger" href="/"><b>Beeflix</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown {{ (request()->segment(1)) == 'genre' ? 'active' : '' }}">
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
    <nav class="navbar navbar-expand-lg navbar-light bg-white pt-0">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="{{url()->previous()}}"><button type="button" class="btn btn-danger btn-sm back-btn" action="action">← Kembali</button></a><a href="/"><button type="button" class="btn btn-outline-dark btn-sm view-all-btn">Lihat Semua Film</button></a>
                </li>
            </ul>
        </div>
    </nav>
</div>

@push('inline-scripts')
{{-- <script>
    function back() {
        fallback = '/';
        var previous = window.location.href;
        window.history.go(-1);
        setTimeout(function() {
            if (window.location.href == previous) {
                window.location.href = fallback;
            }
        }, 500);
    }

</script> --}}
@endpush
