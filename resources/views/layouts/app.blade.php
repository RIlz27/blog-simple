<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

    @livewireStyles

</head>

<body>

    {{-- navbar atas --}}
    <div class="bg-white flex justify-between items-center m-10">
        <a href="https://wa.me/6283829158503"
            class="text-base text-black hover:text-stone-600 font-semibold text-base font-bold">Contact</a>
        <a href="{{ url('/') }}"
            class="text-4xl font-extrabold text-black text-extrabold p-2 items-center h-1/4 text-2xl ml-7 ">RilzyBlog</a>

        {{-- icon --}}
        <div class="flex space-x-4 items-center text-sm text-black justify-end-safe">
            <a href="https://github.com/RIlz27" target="_blank" class="hover:text-gray-500">
                <i class="fab fa-github fa-lg"></i>
            </a>
            <a href="https://instagram.com/rilz.jhr" target="_blank" class="hover:text-pink-500">
                <i class="fab fa-instagram fa-lg"></i>
            </a>
            <a href="http://my-portfolio-ten-zeta-38.vercel.app" class="hover:text-blue-500">
                <i class="fa-solid fa-user"></i>
            </a>
            <a  target="_blank" class="hover:text-blue-400">
                <i class="fa-solid fa-magnifying-glass"></i>
            </a>
        </div>

    </div>


    <nav>
        <div class="my-5 px-4">
            <div class="flex items-center space-x-4 bg-white px-4 py-3 mx-5 justify-center" x-data="{ open: false }">
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open"
                        class="text-black focus:text-blue-950 text-base font-semibold focus:outline-none flex items-center space-x-1">
                        <span>Home</span>
                        <svg class="w-4 h-4 transform" :class="{ 'rotate-180': open }" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.72-3.7a.75.75 0 111.06 1.06l-4.25 4.25a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <!-- dropdown -->
                    <div x-show="open" class="absolute left-0 mt-2 w-40 bg-white rounded shadow-lg z-50" x-transition>
                        <a href="{{ route('posts.index') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Beranda</a>
                    </div>
                </div>


                <a href="{{ route('posts.create') }}"
                    class="text-black focus:text-blue-950 text-base font-semibold hover:text-gray-300">Buat
                    Postingan</a>
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
