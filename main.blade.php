<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Week-02 : @yield('title')</title>
</head>
<body>
<header>
<h1>My books -store @yield('title')</h1>
<nav>
<a href="{{route('products-list')}}">Products</a>
<a href="{{route('categories-list')}}">Category</a>
</nav>
</header>

<div>

@yield('content')
</div>
<footer>
    &#xA9; Copyright Week-03, 2024 Nutnicha's Books Store.
</footer>
</body>
</html>