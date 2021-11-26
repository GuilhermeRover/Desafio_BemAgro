@extends('layouts.app')
@section('body')
    
    <div class="">
        @include('app.header.header', ['page' => 'Detalhes'])
    </div>
    
    <div class="w-full shadow-md z-20 bg-gray-50 dark:bg-gray-900 toggle-theme">
        <div class="w-full flex items-center justify-center">
            <div class=" my-20">
                <div class="p-4 shadow-md rounded-md bg-yellow-300">
                    <div class="flex items-center justify-center">
                        <img src="{{ $gitSearch->json()['avatar_url'] ?? '' }}" alt="" class="w-24 h-24 rounded-full">
                    </div>
                    <div class="text-2xl text-center text-gray-900 dark:text-gray-900 toggle-theme">
                        {{ $gitSearch->json()['login'] ?? '' }}
                    </div>
                    <div class="text-2xl text-center text-gray-900 dark:text-gray-900 toggle-theme">
                        {{ $gitSearch->json()['name'] ?? '' }}
                    </div>
                    <div class="text-2xl text-center text-gray-900 dark:text-gray-900 toggle-theme">
                        {{ $gitSearch->json()['email'] ?? '' }}
                    </div>
                </div>
                <div class="w-full md:flex md:items-center lg:justify-around">
                    <div class="md:w-2/6 p-4 md:h-28 border shadow-md rounded-md bg-yellow-100">
                        <div class="text-2xl font-semibold text-center text-gray-900 dark:text-gray-900 toggle-theme">
                            Seguidores
                        </div>
                        <div class="text-xl text-center text-gray-900 dark:text-gray-900 toggle-theme">
                            {{ $gitSearch->json()['followers'] ?? '' }}
                        </div>
                    </div>
                    <div class="md:w-2/6 p-4 md:h-28 border shadow-md rounded-md bg-yellow-100">
                        <div class="text-2xl font-semibold text-center text-gray-900 dark:text-gray-900 toggle-theme">
                            Seguindo
                        </div>
                        <div class="text-xl text-center text-gray-900 dark:text-gray-900 toggle-theme">
                            {{ $gitSearch->json()['following'] ?? '' }}
                        </div>
                    </div>
                    <div class="md:w-2/6 p-4 md:h-28 border shadow-md rounded-md bg-yellow-100">
                        <div class="text-2xl font-semibold text-center text-gray-900 dark:text-gray-900 toggle-theme">
                            Repositórios públicos
                        </div>
                        <div class="text-xl text-center text-gray-900 dark:text-gray-900 toggle-theme">
                            {{ $gitSearch->json()['public_repos'] ?? '' }}
                        </div>
                    </div>
                </div>
                <div class="md:flex md:items-center lg:justify-around">
                    <div class="md:w-full p-4 md:h-28 border shadow-md rounded-md bg-yellow-100">
                        <div class="text-2xl font-semibold text-center text-gray-900 dark:text-gray-900 toggle-theme">
                            Github
                        </div>
                        <div class="text-xl text-center underline text-gray-900 dark:text-gray-900 toggle-theme">
                            <a href="{{ $gitSearch->json()['html_url'] ?? '' }}">
                                {{ $gitSearch->json()['html_url'] ?? '' }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="md:flex md:items-center lg:justify-around">
                    <div class="md:w-full p-4 md:h-28 border shadow-md rounded-md bg-yellow-100">
                        <div class="text-2xl font-semibold text-center text-gray-900 dark:text-gray-900 toggle-theme">
                            Blog
                        </div>
                        <div class="text-xl text-center underline text-gray-900 dark:text-gray-900 toggle-theme">
                            <a href="{{ $gitSearch->json()['blog'] ?? '' }}">
                                {{ $gitSearch->json()['blog'] ?? '' }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="md:flex md:items-center lg:justify-around">
                    <div class="md:w-full p-4 md:h-28 border shadow-md rounded-md bg-yellow-100">
                        <div class="text-2xl font-semibold text-center text-gray-900 dark:text-gray-900 toggle-theme">
                            Twitter
                        </div>
                        <div class="text-xl text-center text-gray-900 dark:text-gray-900 toggle-theme">
                            {{ $gitSearch->json()['twitter_username'] ?? '' }}
                        </div>
                    </div>
                </div>
                <div class="md:flex md:items-center lg:justify-around">
                    <div class="md:w-2/6 p-4 md:h-28 border shadow-md rounded-md bg-yellow-100">
                        <div class="text-2xl font-semibold text-center text-gray-900 dark:text-gray-900 toggle-theme">
                            Local
                        </div>
                        <div class="text-xl text-center text-gray-900 dark:text-gray-900 toggle-theme">
                            {{ $gitSearch->json()['location'] ?? '' }}
                        </div>
                    </div>
                    <div class="md:w-2/6 p-4 md:h-28 border shadow-md rounded-md bg-yellow-100">
                        <div class="text-2xl font-semibold text-center text-gray-900 dark:text-gray-900 toggle-theme">
                            Blog
                        </div>
                        <div class="text-xl text-center text-gray-900 dark:text-gray-900 toggle-theme">
                            {{ $gitSearch->json()['blog'] ?? '' }}
                        </div>
                    </div>
                    <div class="md:w-2/6 p-4 md:h-28 border shadow-md rounded-md bg-yellow-100">
                        <div class="text-2xl font-semibold text-center text-gray-900 dark:text-gray-900 toggle-theme">
                            Empresa
                        </div>
                        <div class="text-xl text-center text-gray-900 dark:text-gray-900 toggle-theme">
                            {{ $gitSearch->json()['company'] ?? '' }}
                        </div>
                    </div>
                </div>
                <div class="md:flex md:items-center lg:justify-around">
                    <div class="md:w-full p-4 md:h-28 border shadow-md rounded-md bg-yellow-100">
                        <div class="text-2xl font-semibold text-center text-gray-900 dark:text-gray-900 toggle-theme">
                            Biografia
                        </div>
                        <div class="text-xl text-center text-gray-900 dark:text-gray-900 toggle-theme">
                            {{ $gitSearch->json()['bio'] ?? '' }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection