<div class="mt-3">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<div class="{{ Auth::user()->id === $post->user_id  ? "bg-blue-100" : "bg-gray-100" }}">
<div class="p-6 text-gray-900 dark:text-gray-100">

    <div class="flex justify-between">

        <div>
            <span class="text-gray-500 me-3">Autor:</span>
            <span class="text-blue-600">{{ $post->user->name }}</span>
        </div>

        <div>
            <span class="text-gray-500 me-3">Criado em:</span>
            <span class="text-blue-600">{{ $post->created_at }}</span>
        </div>

    </div>

    <div class="mt-3">

        <h1 class="text-xl font-bold text-gray-800">{{ $post->title }}</h1>
        <p class="mt-3 text-gray-900">{{ $post->content }}</p>

    </div>

    <div class="mt-3 ps-5 text-end">
        @can('post.delete', $post)
            <a href="{{ route('delete.post', ['id' => $post->id ]) }}" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-6 rounded">Deletar postagem</a>
        @endcan
    </div>

</div>
</div>
</div>
</div>