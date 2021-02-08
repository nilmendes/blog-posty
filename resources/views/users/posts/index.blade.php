@extends('layouts.app')

@section('content')
<div class='flex justify-center'>
    <div class='w-8/12'>
        <div class="p-6">
            <h1 class="text-2xl font-medium mb-1">
                {{ $user->name }}
            </h1>
            <p>
                Publicado {{ $posts->count() }} {{ Str::plural('post', $posts->count()) }} e
                recebeu {{ $user->receivedLikes->count() }} likes.

            </p>
        </div>
        <div class="bg-white p-6 rounded-lg">
            @if ($posts->count())
            @foreach ($posts as $post)
            <x-post :post="$post" />
            <hr class="border-gray-400 border-solid p-2" />
            @endforeach

            {{ $posts->links() }}

            @else
            <p> {{ $user->name }} Não possuí nenhuma publicação. </p>
            @endif
        </div>
    </div>
</div>

</div>
@endsection