<div class="fixed w-screen h-20 flex items-center justify-around">
    <div class="text-3xl text-gray-900 dark:text-gray-100 toggle-theme">
        {{ $page ?? '' }}
    </div>
    <div class="flex items-center justify-center">
        <div class="flex items-center justify-center p-2 mx-4" @click="dark = !dark, change();">
            <box-icon name='moon' class="fill-current absolute w-8 h-8 cursor-pointer text-gray-900 dark:text-gray-100 toggle-theme" x-show="!dark"></box-icon>
            <box-icon name='sun' class="fill-current absolute w-8 h-8 cursor-pointer text-gray-900 dark:text-gray-100 toggle-theme" x-show="dark"></box-icon>
        </div>
        <box-icon name='menu-alt-right' class="fill-current ml-4 w-9 h-9 cursor-pointer text-gray-900 dark:text-gray-100 toggle-theme" @click="Menu = true"></box-icon>
    </div>
</div>
<div class="fixed w-full lg:w-3/6 h-screen z-20 top-0 right-0 bg-gray-900 dark:bg-white toggle-theme" @click.away="Menu = false" x-show="Menu" x-transition>
    <div class="absolute right-10 my-5" @click="Menu = false">
        <box-icon name='x' class="fill-current w-8 h-8 cursor-pointer text-gray-50 dark:text-gray-900 toggle-theme"></box-icon>
    </div>
    <div class="w-full h-full flex items-center justify-center">
        <div>
        @auth
            <div class="my-20 text-3xl text-gray-50 dark:text-gray-900 toggle-theme">
                {{ $user->name ?? '' }}
            </div>    
        <a href="{{ route('dashboard.index') }}" class="block my-5 text-3xl text-gray-50 dark:text-gray-900 toggle-theme">
                Dashboard
            </a>
            <a href="{{ route('config.index') }}" class="block my-5 text-3xl text-gray-50 dark:text-gray-900 toggle-theme">
                Configurações
            </a>
            <a href="{{ route('logout') }}" class="block my-20 text-xl text-gray-50 dark:text-gray-900 toggle-theme">
                Sair
            </a>
        @else
            <a href="{{ route('home') }}" class="block my-5 text-3xl text-gray-50 dark:text-gray-900 toggle-theme">
                Home
            </a>
            <a href="{{ route('login') }}" class="block mt-10 text-xl text-gray-50 dark:text-gray-900 toggle-theme">
                Login
            </a>
            <a href="{{ route('register') }}" class="block mt-4 text-xl text-gray-50 dark:text-gray-900 toggle-theme">
                Cadastre-se
            </a>            
        @endauth
        </div>
    </div>
</div>
