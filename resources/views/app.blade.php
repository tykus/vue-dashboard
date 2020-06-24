<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="antialiased bg-gray-800 text-gray-100 p-10">
    <div id="app" class="grid grid-cols-1 lg:grid-cols-3 gap-3">
        <spotify-card class="h-64" />
    </div>
    @routes
</body>
</html>