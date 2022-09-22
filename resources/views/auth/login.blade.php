@extends('layouts.app')
@section('title', 'Login')

@section('content')

<div class="flex justify-end px-10 py-5">	
	<a href="{{route('register.index')}}" class="font-semibold border-2 border-blue-500 py-2 px-4 rounded-md hover:bg-blue-500 hover:text-white">Registrar</a>	
</div>

<div class="block mx-auto my-2 p-8 bg-white w-1/3 border border-gray-200">
<h1 class="text-3xl text-center font-bold">Inicio de Sesion</h1>

<form class="mt-4" method="POST" action="">
@csrf
	<input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email" id="email" name="email">
	
	<input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Contraseña" id="password" name="password">

@error('message')
	<p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>
@enderror

	<button type="submit" class="rounded-md bg-blue-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-blue-700">Iniciar Sesion</button>
</form>

</div>

@endsection 
