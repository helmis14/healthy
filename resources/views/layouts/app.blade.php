<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @include('includes.head')
</head>
<body>
    <header>
        @include('includes.header')
    </header>
    @include('includes.sidebar')
    <div class="container">
        @yield('content')
    </div>
    
    @include('includes.footer')

    @yield('js')
</body>
</html>
