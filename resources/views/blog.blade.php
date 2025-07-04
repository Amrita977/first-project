<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Blogs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header, footer {
            background-color: #333;
            color: white;
            padding: 1rem 2rem;
            text-align: center;
        }

        nav {
            margin: 10px 0;
            text-align: center;
        }

        nav a {
            text-decoration: none;
            color: #333;
            margin: 0 15px;
            font-weight: bold;
        }

        .container {
            max-width: 900px;
            margin: 2rem auto;
            background: white;
            padding: 2rem;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .post {
            border-bottom: 1px solid #ddd;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
        }

        .post:last-child {
            border: none;
        }

        .post h3 {
            margin-bottom: 0.5rem;
        }

        .post p {
            color: #555;
        }

        .read-more {
            color: #0066cc;
            text-decoration: none;
        }

        .read-more:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<header>
    <h1>Welcome to My Blog</h1>
</header>

<nav>
    <a href="{{ route('blog') }}">Home</a>
    <a href="{{ route('about') }}">About</a>
    <a href="{{ route('contact') }}">Contact</a>
</nav>

<div class="container">
    <h2>Latest Blog Posts</h2>

    <div class="post">
        <h3>Understanding Laravel Blade Templates</h3>
        <p>Laravel Blade is a powerful templating engine that allows developers to write clean, reusable views for their applications...</p>
        <a class="read-more" href="#">Read More</a>
    </div>

    <div class="post">
        <h3>Getting Started with PHP Routing</h3>
        <p>Routing in PHP frameworks like Laravel helps you handle web requests in a structured way. In this post, we’ll look at how routes work...</p>
        <a class="read-more" href="#">Read More</a>
    </div>

    <div class="post">
        <h3>Why MVC Matters in Web Development</h3>
        <p>The Model-View-Controller architecture separates data, logic, and design. It’s essential for scalable and maintainable code...</p>
        <a class="read-more" href="#">Read More</a>
    </div>
</div>

<footer>
    <p>&copy; 2025 My Blog. All rights reserved.</p>
</footer>

</body>
</html>
