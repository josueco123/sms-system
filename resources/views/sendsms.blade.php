<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Generar Archivo Para SMS
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form method="POST" action="{{ route('listsms') }}" enctype="multipart/form-data">   
                @csrf                                    
                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-medium text-gray-900 " for="file_input">Subir Archivo</label>
                        <input class="block text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 light:text-gray-400 focus:outline-none light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400" id="file_input" name="file_input" type="file" required>
                        <p class="mt-1 text-sm text-gray-500 " id="file_input_help">Sube el archivo de exel con los números de los clientes para enviarles los SMS.</p>
                    </div>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center light:bg-blue-600 light:hover:bg-blue-700 light:focus:ring-blue-800">Descargar Archivo Filtrado</button>
                    
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
