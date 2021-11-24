@extends('layouts.app')
@section('body')
    
    <div class="">
        @include('app.header.header', ['page' => 'Login'])
    </div>

    <div class="w-screen h-screen flex items-center justify-center">
        <div class="w-5/6 lg:w-5/12">
            <div class="flex items-center justify-center">
                <div class="w-full">
                    <form class="border p-10 rounded border-gray-300 dark:border-gray-700 toggle-theme">
                        @csrf
                        <div class="text-3xl text-center text-gray-900 dark:text-gray-50 toggle-theme">
                            Login
                        </div>
                        <div class="mt-10">
                            <div class="relative mb-10 focus-within:border-blue-900 toggle-theme">
                                <input type="text" name="email" id="email" placeholder=" " class="w-full block border-0 border-b border-gray-500 dark:border-gray-700 focus:ring-0 focus:outline-none focus:border-blue-900-light dark:focus:border-blue-900 text-gray-900 dark:text-gray-100 bg-transparent toggle-theme">
                                <label for="email" class="absolute text-lg top-2 cursor-text -z-1 duration-300 origin-0 text-gray-900 dark:text-gray-100 toggle-theme">Email:</label>
                                @error('email')
                                <div class="p-2 text-sm text-red-500">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="relative mb-10 focus-within:border-blue-900">
                                <input type="password" name="password" id="password" placeholder=" " class="w-full block border-0 border-b border-gray-500 dark:border-gray-700 focus:ring-0 focus:outline-none focus:border-blue-900-light dark:focus:border-blue-900 text-gray-900 dark:text-gray-100 bg-transparent toggle-theme">
                                <label for="password" class="absolute text-lg top-2 cursor-text -z-1 duration-300 origin-0 text-gray-900 dark:text-gray-100 toggle-theme">Senha:</label>
                                @error('password')
                                <div class="p-2 text-sm text-red-500">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="flex items-center justify-center">
                                <div class="">
                                    <button type="submit" class="p-2 px-6 text-2xl bg-gray-800 dark:bg-gray-100 text-white dark:text-gray-900 rounded-md">Entrar</button>
                                </div>
                            </div>
                            <a href="{{ route('register') }}" class="flex items-center justify-center mt-2">
                                <box-icon name='user-plus' class="fill-current w-8 h-8 text-gray-900 dark:text-gray-50"></box-icon>
                                <div class="px-1 text-gray-900 dark:text-gray-50">
                                    Não tem uma conta? Cadastre-se!
                                </div>
                            </a>
                        </div>
                    </form>
                      
                    
                </div>
            </div>
        </div>
    </div>

@endsection