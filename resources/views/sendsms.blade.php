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
                @if ($errors->any())
                <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 light:bg-gray-800 light:text-red-400" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Info</span>
                    <div>
                    @foreach ($errors->all() as $error)
                    {{ $error }}
                        @endforeach
                    </div>
                </div>                       
                @endif
                <form method="POST" action="{{ route('listsms') }}" enctype="multipart/form-data">   
                @csrf                                    
                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-medium text-gray-900 " for="file_input">Subir Archivo</label>
                        <input class="block text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 light:text-gray-400 focus:outline-none light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400" id="file_input" name="file_input" type="file" accept=".xls,.xlsx" required>
                        <p class="mt-1 text-sm text-gray-500 " id="file_input_help">Sube el archivo de exel con los números de los clientes para enviarles los SMS.</p>
                    </div>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center light:bg-blue-600 light:hover:bg-blue-700 light:focus:ring-blue-800">Descargar Archivo Filtrado</button>
                    
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
