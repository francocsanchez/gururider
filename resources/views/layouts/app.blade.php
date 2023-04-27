<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guru-Rider - @yield('title')</title>
    @stack('styles')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class=" bg-gray-100">

    <header class="border-b bg-white shadow" id="home">
        <div class="container flex justify-between items-center mx-auto">
            <img src="{{ asset('img/logo.png') }}" alt="" class="h-20">
            <nav class="flex gap-3 items-center">
                <a class="font-bold uppercase text-sm text-gray-700 hover:text-gray-900" href="#home">HOME</a>
                <a class="font-bold uppercase text-sm text-gray-700 hover:text-gray-900" href="#sobreNosotros">NOSOTROS</a>
                <a class="font-bold uppercase text-sm text-gray-700 hover:text-gray-900" href="#contactanos">CONTACTANOS</a>
            </nav>
        </div>
    </header>

    @yield('content')

    <div class="p-5">
        <div class="container flex justify-end items-center mx-auto">
            <nav class="flex gap-3 items-center">
                <a class="font-bold uppercase text-sm text-gray-400 hover:text-gray-700" href="https://www.instagram.com/guru.ride/"
                    target="_blank">instagram</a>
                <a class="font-bold uppercase text-sm text-gray-400 hover:text-gray-700" href="https://www.youtube.com/@gururide"
                    target="_blank">youtube</a>
            </nav>
        </div>
    </div>

    <button class="fixed right-4 bottom-4 p-4 bg-green-500 text-white rounded-full shadow-lg transition-colors duration-300 hover:bg-green-700 font-black" onclick="window.open('https://wa.me/5492994049885?text=Me%20contacto%20desde%20el%20sitio%20web%20de%20Guru-Ride%20por%3A')">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path fill-rule="evenodd" d="M12 2.25c-2.429 0-4.817.178-7.152.521C2.87 3.061 1.5 4.795 1.5 6.741v6.018c0 1.946 1.37 3.68 3.348 3.97.877.129 1.761.234 2.652.316V21a.75.75 0 001.28.53l4.184-4.183a.39.39 0 01.266-.112c2.006-.05 3.982-.22 5.922-.506 1.978-.29 3.348-2.023 3.348-3.97V6.741c0-1.947-1.37-3.68-3.348-3.97A49.145 49.145 0 0012 2.25zM8.25 8.625a1.125 1.125 0 100 2.25 1.125 1.125 0 000-2.25zm2.625 1.125a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zm4.875-1.125a1.125 1.125 0 100 2.25 1.125 1.125 0 000-2.25z" clip-rule="evenodd" />
          </svg>                  
      </button>

    <footer class="text-center text-gray-500 font-bold uppercase text-xs mb-10">
        guru ride - Todos los derechos reservados {{ now()->year }}
    </footer>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html>
