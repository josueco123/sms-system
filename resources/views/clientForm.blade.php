<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Agregar Cliente a Lista Negra
        </h2>
    </x-slot>
    <div class="py-10">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form method="POST" action="{{ route('clientformp') }}">   
                @csrf   
                <div class="grid gap-6 mb-6 md:grid-cols-2">                                 
                    <div>
                        <label for="cedula" class="block mb-2 text-sm font-medium text-gray-900 ">Cedula</label>
                        <input type="number" id="cedula" name="cedula" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 light:focus:ring-blue-500 light:focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 ">Nombre</label>
                        <input type="text" id="first_name" name="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 light:focus:ring-blue-500 light:focus:border-blue-500" required>
                    </div>
                </div>
                <div class="grid gap-6 mb-6 md:grid-cols-2">                                 
                    <div>
                        <label for="first_last_name" class="block mb-2 text-sm font-medium text-gray-900 ">Primer Apellido</label>
                        <input type="text" id="first_last_name" name="first_last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 light:focus:ring-blue-500 light:focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="second_last_name" class="block mb-2 text-sm font-medium text-gray-900 ">Segundo Apellido</label>
                        <input type="text" id="second_last_name" name="second_last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 light:focus:ring-blue-500 light:focus:border-blue-500" required>
                    </div>
                </div>
                <div class="grid gap-6 mb-6 md:grid-cols-2">                                 
                    <div>
                        <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900 ">Numero de Celular</label>
                        <input type="number" id="phone_number" name="phone_number"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 light:focus:ring-blue-500 light:focus:border-blue-500" required>
                    </div>                    
                </div>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center light:bg-blue-600 light:hover:bg-blue-700 light:focus:ring-blue-800">Guardar</button>
                    
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>