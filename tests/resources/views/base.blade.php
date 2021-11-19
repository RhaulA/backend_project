<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="{{asset('top-logo.svg')}}" type="image/x-icon">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <title>@yield('title')</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-dark bg-dark">
                <div class="container">
                  <a class="navbar-brand" href="{{ route("home") }}">
                    <img src="{{ asset('top-logo.svg') }}" alt="Logo" width="100%" height="100%">
                  </a>
                  <a href="https://egmyapp.herokuapp.com/" target="_blank" class="btn btn-outline-light">Go to website</a>
                </div>
            </nav>
        </header>
        <div>
            @yield('content')
        </div>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    </body>
</html>
