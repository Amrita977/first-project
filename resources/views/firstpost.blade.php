<!-- resources/views/firstpost.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Post Page</title>
</head>
<body>
    <h1>First Post Page</h1>
    <h2>This is the first post.</h2>

    <p>Welcome to your first post page using Laravel Blade!</p>

    <!-- Example of Blade variable -->
    @isset($name)
        <p>Hello, {{ $name }}! Glad to see you here.</p>
    @else
        <p>Hello,Guest!</p>
    @endisset

    <!-- Example of Blade loop -->
    <h3>Post Highlights: </h3>
    <ul>
        @foreach($highlights ?? [] as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</body>
</html>
