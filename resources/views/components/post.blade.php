@props(['post' => $post])

<div class="mb-4">
    <a href='{{ route('users.posts', $post->user) }}' class="font-bold">
        {{ $post->user->name }}
    </a>
    <span class='text-gray-600 text-sm'>
        {{ $post->created_at->diffForHumans() }}
    </span>
    <p class='text-justify md:text-base m-3'>
        {{ $post->body }}
    </p>

    @can('delete', $post)
    <form action='{{ route('posts.destroy', $post) }}' method='post' class="mr-1">
        @csrf
        @method('DELETE')
        <button type='submit' class="text-white bg-red-500 rounded-lg p-1.5">
            <span>🗑️</span> Deletar publicação
        </button>
    </form>
    @endcan


    <div class='flex items-center m-3'>
        @auth
        @if (!$post->likedBy(auth()->user()))
        <form action='{{ route('posts.likes', $post) }}' method='post' class="mr-1">
            @csrf
            <button type='submit' class="text-blue-500">👍</button>
        </form>
        @else
        <form action='{{ route('posts.likes', $post) }}' method='post' class="mr-1">
            @csrf
            @method('DELETE')
            <button type='submit' class="text-blue-500">👎</button>
        </form>
        @endif
        @endauth
        <span>
            {{ $post->likes->count() }}
            {{ Str::plural('like', $post->likes->count() <= 0) }}
        </span>
    </div>
</div>