<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
    </head>
    <body>
    <div class="container">
            @yield('header')
            @foreach($errors->all() as $error)
              <p class="error">{{ $error }}</p>
            @endforeach
            @foreach($errors as $error)
                <p class="error">{{ $error }}</p>
            @endforeach
            @if(session()->has('success'))
                <div class="success">
                    {{ session()->get('success') }}
                </div>
            @endif
            @yield('content')
            @yield('footer')
        </div>
    </body>
</html>