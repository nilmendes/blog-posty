@extends('layouts.app')

@section('content')
<div class='flex justify-center'>
    <div class='w-6/12 bg-white p-6 rounded-lg'>
        <form action='{{route('register')}}' method="POST">
            @csrf
            <div class='mb-4'>
                <label for='name' class="sr-only">Nome</label>
                <input type='text' name='name' placeholder='Seu Nome' id="name" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name')
                        border-red-500 @enderror" value="{{old('name')}}" />
                @error('name')
                <div class='text-red-500 mt-2 text-sm'>
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class='mb-4'>
                <label for='username' class="sr-only">Username</label>
                <input type='text' name='username' placeholder='Seu Username' id="username" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username')
                        border-red-500 @enderror" value="{{old('username')}}" />
                @error('username')
                <div class='text-red-500 mt-2 text-sm'>
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class='mb-4'>
                <label for='email' class="sr-only">E-mail</label>
                <input type='email' name='email' placeholder='Seu E-mail' id="email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email')
                        border-red-500 @enderror" value="{{old('email')}}" />
                @error('email')
                <div class='text-red-500 mt-2 text-sm'>
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class='mb-4'>
                <label for='password' class="sr-only">Senha</label>
                <input type='password' name='password' placeholder='Sua Senha' id="password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password')
                        border-red-500 @enderror" />
                @error('password')
                <div class='text-red-500 mt-2 text-sm'>
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class='mb-4'>
                <label for='password' class="sr-only">Repita sua senha</label>
                <input type='password' name='password_confirmation' placeholder='Repita sua Senha'
                    id="password_confirmation" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password_confirmation')
                        border-red-500 @enderror" />
                @error('password_confirmation')
                <div class='text-red-500 mt-2 text-sm'>
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div>
                <button type='submit'
                    class="bg-blue-500 text-white px-4 py-3 rounded-lg font-medium w-full">Registrar-se</button>
            </div>
        </form>
    </div>
</div>

</div>
@endsection