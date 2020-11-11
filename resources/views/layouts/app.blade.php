<!DOCTYPE html>
<html lang="en">

<head>

    <title>
        @section('title')
        Beeflix
        @show()
    </title>

    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/favicon-16x16.png')}}">

    @include('layouts._partials.style')

</head>

<body>

    <div class="non-footer pb-3">

        @yield('content')

    </div>

    @include('layouts._partials.footer')

    @include('layouts._partials.script')

</body>

</html>
