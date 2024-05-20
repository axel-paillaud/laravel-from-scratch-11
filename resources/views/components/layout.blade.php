<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <nav>
        <x-nav-link link="/">Home</x-nav-link>
        <x-nav-link link="/contact">Contact</x-nav-link>
        <x-nav-link link="/about">About</x-nav-link>
    </nav>
        {{ $slot }}
    </body>
</html>
