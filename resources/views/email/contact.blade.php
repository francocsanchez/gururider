@extends('layouts.email')

@section('content')
    <section class=" mx-20 my-10">
        <h1 class=" uppercase text-2xl font-black">Contacto desde la web</h1>
        <p class=" text-sm">Recibiste un contacto de la web</p>
        <p class="mt-2 uppercase font-bold">Datos de contacto</p>
        <div class=" bg-gray-200 rounded p-4 border-2 border-gray-300">
            <p>NOMBRE: {{$details['name']}}</p>
            <p>EMAIL: {{$details['email']}}</p>
            <p>TELEFONO: {{$details['phone']}}</p>
            <p>MENSAJE: {{$details['message']}}</p>
        </div>
    </section>
@endsection
