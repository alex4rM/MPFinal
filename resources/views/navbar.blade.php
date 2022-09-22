<div class="w-1/2 px-12 mr-auto">
	<a class="text-2x1 font-bold text-white">Mesa de Partes</a>
</div>

<ul class="w-1/2 px-16 ml-auto flex justify-start pt-1">
	<li>
		<a href="/">Inicio</a>
	</li>
	</li>
</ul>

<ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
	@if (auth()->check()) 
		<li class="mx-6">
			<p class="text-xl">Bienvenido <b>{{auth()->user()->name}}</b></p>
		</li>
		<li>
			 <a href="{{ route('login.destroy') }}" class="font-semibold border-2 border-red-500 py-2 px-4 rounded-md hover:bg-red-500 hover:text-white">Salir</a>
		</li>
	@else 
			<li class="mx-6">
				<a href="{{ route('login.index')}}" class="font-semibold hover:bg-blue-500 py-3 px-4 rounded-md hover:text-white">Iniciar Sesion</a>
			</li>
@endif	
	
</ul>
