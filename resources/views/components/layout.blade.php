<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav>
        <x-nav-link href="/">Home</x-nav-link>
        <x-nav-link href="/about">About</x-nav-link>
        <x-nav-link href="/contact">Contact</x-nav-link>
        <x-nav-link  href="/jobs">Job</x-nav-link>
    </nav>

    {{$slot}}
</body>
</html>
