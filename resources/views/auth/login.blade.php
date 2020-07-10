@extends('layouts.app')

@section('content')
<div class="container mx-auto flex justify-center">
    <div class="px-12 py-8 bg-gray-200 border border-gray-300 rounded-lg">
        <div class="col-md-8">
                <div class="mb-5 text-lg font-bold text-black">{{ __('Login') }}</div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-6">
                            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('Email') }}</label>

                            
                                <input id="email" type="email" class="border border-gray-400 p-2 w-full" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                    </span>
                                @enderror
                        </div>

                        <div class="mb-6">
                            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('Password') }}</label>

                            
                                <input id="password" type="password" class="border border-gray-400 p-2 w-full" name="password" required autocomplete="current-password">

                                @error('password')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                    </span>
                                @enderror
                        </div>

                        <div class="mb-6">
                            <div>
                                    <input class="mr-1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="uppercase font-bold text-xs text-gray-700" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                            </div>
                        </div>

                        <div class="mb-6 mb-0">
                                <button type="submit" class="bg-blue-400 text-white rounded-full py-1 px-4 hover:bg-blue-500">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="text-xs text-gray-700" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>
                    </form>
        </div>
    </div>
</div>
@endsection
