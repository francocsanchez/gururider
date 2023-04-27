@extends('layouts.app')

@section('title')
    Perfil:
@endsection

@section('content')
    <section class="bg-cover bg-center" style="background-image: url({{ asset('img/home_barra.jpeg') }})">
        <div class="max-w-7xl mx-auto px-5 lg:px-0 py-52">
            <h1 class="font-black text-white text-4xl">Domina el arte del snowboard esta temporada</h1>
            <p class="text-white text-lg mt-2 font-bold">Aprende a deslizarte en la nieve de Bariloche</p>
        </div>
    </section>

    <section class=" container mx-auto">
        <div class="text-center uppercase mt-3 text-4xl font-black text-gray-700">
            <p>servicios</p>
        </div>
        <div class="container mx-auto flex items-center flex-wrap pb-12">
            <div class="relative w-full md:w-1/3 xl:w-1/3 p-3 flex flex-col">
                <a href="#" class="relative">
                    <img class="hover:grow hover:shadow-lg" src="{{ asset('img/video.jpeg') }}" />
                    <div
                        class="absolute inset-0 bg-black opacity-0 hover:opacity-80 flex items-center justify-center transition-opacity duration-500 ease-in-out">
                        <p class="text-white uppercase font-black text-2xl text-center">Video correccion</p>
                    </div>
                </a>
            </div>

            <div class="relative w-full md:w-1/3 xl:w-1/3 p-3 flex flex-col">
                <a href="#" class="relative">
                    <img class="hover:grow hover:shadow-lg" src="{{ asset('img/curso.jpeg') }}" />
                    <div
                        class="absolute inset-0 bg-black opacity-0 hover:opacity-80 flex items-center justify-center transition-opacity duration-500 ease-in-out">
                        <p class="text-white uppercase font-black text-2xl text-center">Cursos de snowboard</p>
                    </div>
                </a>
            </div>

            <div class="relative w-full md:w-1/3 xl:w-1/3 p-3 flex flex-col">
                <a href="#" class="relative">
                    <img class="hover:grow hover:shadow-lg" src="{{ asset('img/teoria.jpeg') }}" />
                    <div
                        class="absolute inset-0 bg-black opacity-0 hover:opacity-80 flex items-center justify-center transition-opacity duration-500 ease-in-out">
                        <p class="text-white uppercase font-black text-2xl text-center">Fundamentos del Snowboardd</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="bg-white" id="sobreNosotros">
        <div class="container py-8 px-6 mx-auto">
            <p class="uppercase font-bold text-gray-700 text-2xl mb-8" href="#">
                SOBRE NOSOTROS
            </p>
            <div class="flex flex-row gap-x-8">
                <div class="sm:w-full md:w-1/2">
                    <p class="mt-4">
                        Somos una marca de referencia dedicada a la enseñanza del snowboard y al contenido de montaña
                    </p>
                    <p class="mt-4">
                        Guru Ride nace de la necesidad de ofrecer un servicio de enseñanza del snowboard innovador y
                        diferenciado. Con mas de 10 años de experiencia, y temporadas en Europa, hemos revolucionado las
                        clases de snowboard, no solo creando contenido de montaña que refleja nuestra pasión y experiencia,
                        si no también mirando hacia el futuro, incorporando tecnología aplicada al deporte.
                    </p>
                    <p class="mt-4 mb-8">
                        Nuestros cimientos están construidos sobre la base del respeto mutuo. Dedicación para poder ofrecer
                        a nuestros alumnos una experiencia única e irrepetible. Fomentar la actividad física para obtener
                        una vida saludable, y de esa manera que cada persona pueda conectar con la naturaleza sin importar a
                        qué se dedique o de dónde venga.
                    </p>
                </div>
                <div class="hidden md:block md:w-1/2">
                    <img class="w-full " src="{{ asset('img/compa.jpeg') }}" />
                </div>
            </div>
        </div>
    </section>

    <section class="bg-black" id="contactanos">
        <div class="container py-8 px-6 mx-auto">
            <p class="uppercase font-bold text-white text-4xl mb-8 text-center" href="#">
                CONTACTENOS
            </p>
            <div class=" md:mx-40">
                <form action="{{ route('contact') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="mb-1 uppercase block font-bold text-white">Nombre y apellido</label>
                        <input id='name' name='name' type="text" placeholder="Nombre y Apellido"
                            class="p-2 border w-full rounded-lg focus:border-black focus:outline-none ">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="mb-1 uppercase block font-bold text-white">Email</label>
                        <input id='email' name='email' type="email" placeholder="Email"
                            class="p-2 border w-full rounded-lg focus:border-black focus:outline-none ">
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="mb-1 uppercase block font-bold text-white">Telefono</label>
                        <input id='phone' name='phone' type="text" placeholder="Telefono"
                            class="p-2 border w-full rounded-lg focus:border-black focus:outline-none ">
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="mb-1 uppercase block font-bold text-white">Mensaje</label>
                        <textarea name="message" id="" cols="30" rows="5"
                            class="p-2 border w-full rounded-lg focus:border-black focus:outline-none "></textarea>
                    </div>
                    <div class="mb-4">
                        <input type="submit" value="Contactar"
                            class="w-full bg-cyan-600 transition-colors duration-300 hover:bg-cyan-800 cursor-pointer text-white uppercase font-bold p-2 rounded-lg">
                    </div>
                </form>
            </div>
        </div>

    </section>
@endsection
