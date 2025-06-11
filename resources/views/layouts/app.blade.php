<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>

<body class="bg-gray-100 text-gray-800">
    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-xl font-bold text-blue-600">MyBlog</a>
            <div class="space-x-4">
                <a href="{{ route('posts.index') }}" class="text-gray-700 hover:text-blue-600">Home</a>
                <a href="{{ route('posts.create') }}" class="text-gray-700 hover:text-blue-600">Buat Postingan</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto mt-8 px-4">
        {{ $slot }} 
    </main>

    @livewireScripts
</body>
</html>
