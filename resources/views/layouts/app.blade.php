<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Vite (Tailwind CSS) -->
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
<div class="container mx-auto">
    <!-- Page Content -->
    @yield('content')
</div>
</body>
</html>
