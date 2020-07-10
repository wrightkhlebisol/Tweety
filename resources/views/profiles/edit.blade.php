@extends('layouts.app')

@section('content')
<form method="POST" action="{{$user->profilePath()}}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="mb-6">
        <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">name</label>

        <input type="text" class="border border-gray-400 p-2 w-full" name="name" id="name" required value="{{$user->name}}">

        @error('name')
        <p class="text-red-500 text xs mt-2">{{ $message }}</p>
        @enderror
    </div>


    <div class="mb-6">
        <label for="avatar" class="block mb-2 uppercase font-bold text-xs text-gray-700">avatar</label>
        
        <div class="flex">

            <input type="file" class="border border-gray-400 p-2 w-full" name="avatar" id="avatar">

            <img src="{{ $user->avatar }}" width="40" alt="Your avatar">
        </div>

        @error('avatar')
        <p class="text-red-500 text xs mt-2">{{ $message }}</p>
        @enderror

    </div>

    <div class="mb-6">
        <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">username</label>

        <input type="text" class="border border-gray-400 p-2 w-full" name="username" id="username" required value="{{$user->username}}">

        @error('username')
        <p class="text-red-500 text xs mt-2">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">email</label>

        <input type="email" class="border border-gray-400 p-2 w-full" name="email" id="email" required value="{{$user->email}}">

        @error('email')
        <p class="text-red-500 text xs mt-2">{{ $message }}</p>
        @enderror
    </div>


    <div class="mb-6">
        <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">password</label>

        <input type="password" class="border border-gray-400 p-2 w-full" name="password" id="password" required>

        @error('password')
        <p class="text-red-500 text xs mt-2">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="password_confirmation" class="block mb-2 uppercase font-bold text-xs text-gray-700">password confirmation</label>

        <input type="password" class="border border-gray-400 p-2 w-full" name="password_confirmation" id="password_confirmation" required>

        @error('password_confirmation')
        <p class="text-red-500 text xs mt-2">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-6">
        <button type="submit" 
            class="bg-blue-400 text-white rounded py-3 px-4 hover:bg-blue-500 mr-4" required
        >
            Submit
        </button>

        <a href="{{ $user->profilePath() }}" class="hover:underline text-red-500">Cancel</a>
    </div>



</form>

@stop