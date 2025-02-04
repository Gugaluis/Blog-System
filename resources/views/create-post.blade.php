<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            Nova Postagem
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto mt-10 bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
        <form action="{{ route('store.post') }}" method="post">
            @csrf
            
            <div class="mb-6">
                <label for="title" class="block text-lg font-medium text-gray-700 dark:text-gray-300">Título</label>
                <input type="text" name="title" id="title" 
                    class="mt-2 block w-full p-3 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-900 dark:text-gray-200 bg-gray-100 dark:bg-gray-700"
                    placeholder="Digite o título do post">
                
                @error('title')
                    <p class="text-red-500 text-sm mt-1"> {{ $message }} </p>    
                @enderror
            </div>

            <div class="mb-6">
                <label for="content" class="block text-lg font-medium text-gray-700 dark:text-gray-300">Conteúdo do Post</label>
                <textarea name="content" id="content" rows="6"
                    class="mt-2 block w-full p-3 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-900 dark:text-gray-200 bg-gray-100 dark:bg-gray-700 resize-none"
                    placeholder="Escreva algo incrível..."></textarea>
                
                @error('content')
                    <p class="text-red-500 text-sm mt-1"> {{ $message }} </p>    
                @enderror
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('dashboard') }}" 
                    class="bg-gray-500 hover:bg-gray-700 text-white font-semibold py-2 px-6 rounded-lg transition-all">
                    Cancelar
                </a>
                <button type="submit" 
                    class="bg-blue-600 hover:bg-blue-800 text-white font-semibold py-2 px-6 rounded-lg transition-all">
                    Criar Postagem
                </button>
            </div>

        </form>
    </div>

</x-app-layout>
