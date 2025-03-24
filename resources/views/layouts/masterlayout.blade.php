<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YahooBaba -@yield('title')</title>
    <link rel="stylesheet" href="css/style.css">
    @stack('style')
</head>
<body>

    <!-- Header Section -->
    <header>
        <h1>YahooBaba</h1>
    </header>

    <!-- Navigation Menu -->
    <nav>
        <a href="/">Home</a> |
        <a href="/about">About</a> |
        <a href="/post">Post</a>
    </nav>

    <!-- Main Container -->
    <div class="container">
        <!-- Main Content -->
        <div class="content">
             
            @yield('content')
            
        </div>

        <!-- Sidebar -->
        <aside class="sidebar">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/post">Post</a></li>
            </ul>
        </aside>
    </div>

    <!-- Footer Section -->
    <footer>
        yahoobaba@copyright 2023.
    </footer>
  
@stack('scripts')
</body>
</html>
