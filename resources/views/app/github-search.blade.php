@extends('layouts.app')
@section('body')
    
    <div class="">
        @include('app.header.header', ['page' => 'Pesquisar'])
    </div>
    
    <div class="w-full shadow-md h-screen z-20 top-0 bg-gray-50 dark:bg-gray-900 toggle-theme">
        <div class="w-screen flex items-center justify-center">
            <div class="w-5/6 mt-20">
                <div class="flex items-center justify-center">
                    <section class="container mx-auto p-6 font-mono">
                        <div class="flex items-center p-4 mb-10 text-gray-900 dark:text-gray-50 toggle-theme">
                            <form action="{{ route('gitSearch') }}" class="pt-2 relative mx-auto text-gray-600">
                                <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none" type="text" id="search" name="search" placeholder="Pesquisar no Github">
                                <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                                    <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                        viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                                        width="512px" height="512px">
                                        <path
                                        d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                            <div class="w-full overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                        <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                            <th class="px-4 py-3">Nome</th>
                                            <th class="px-4 py-3">Empresa</th>
                                            <th class="px-4 py-3">Local</th>
                                            <th class="px-4 py-3">link</th>
                                            <th class="px-4 py-3">Biografia</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                        <tr class="text-gray-700">
                                            <td class="px-4 py-3 border">
                                                <div class="flex items-center text-sm">
                                                    <div class="relative w-12 h-12 mr-3 rounded-full md:block">
                                                        <img class="object-cover w-full h-full rounded-full" src="{{ $gitSearch->json()['avatar_url'] ?? '' }}" alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-semibold text-black">{{ $gitSearch->json()['name'] ?? '' }}</p>
                                                        <p class="text-xs text-gray-600">{{ $gitSearch->json()['email'] ?? '' }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 text-ms font-semibold border">
                                                {{ $gitSearch->json()['company'] ?? '' }}
                                            </td>
                                            <td class="px-4 py-3 text-ms font-semibold border">
                                                {{ $gitSearch->json()['location'] ?? '' }}
                                            </td>
                                            <td class="px-4 py-3 text-ms font-semibold border">
                                                <a href="{{ $gitSearch->json()['html_url'] ?? '' }}">
                                                    {{ $gitSearch->json()['html_url'] ?? '' }}
                                                </a>
                                            </td>
                                            <td class="px-4 py-3 text-ms font-semibold border">
                                                {{ $gitSearch->json()['bio'] ?? '' }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <form action="{{ route('dashboard.store') }}" method="post" class="flex items-center justify-center">
                            @csrf
                            <input type="text" id="username" name="username" value="{{ $gitSearch->json()['login'] ?? '' }}" class="hidden">
                            <button type="submit" class="p-3 rounded-md shadow-md bg-green-300 text-gray-900 dark:text-gray-900 toggle-theme">
                                Salvar usuário
                            </button>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>

@endsection