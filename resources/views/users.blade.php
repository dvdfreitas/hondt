<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilizadores</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h1>Users</h1>
    <div class="grid grid-cols-8 gap-3">
        @foreach ($users as $user)
            <div class="hover:bg-blue-50 px-2 border rounded shadow">
                {{ $user->name }}
            </div>
        @endforeach
    </div>
</body>
</html>