@component('mail::message')
# Sua postagem foi curtida

{{ $liker->name }} gostou de uma de suas postagens.

@component('mail::button', ['url' => route('posts.show', $post)])
Ver publicação
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent