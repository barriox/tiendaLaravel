
@extends('layout')

@section("nav")
    <li>
        <a href="/store" class="text-2xl block py-2 pr-8 text-black rounded md:bg-transparent dark:text-white " aria-current="page">Home</a>
    </li>
    @auth
        <li>
            <a href="{{route('products.index')}}" class="text-2xl block py-2 pr-8 pl-3 text-black border-b md:hover:bg-transparent md:border-0  dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Products</a>
        </li>
        <li>
            <a href="#" class="text-2xl block py-2 pr-8 pl-3 text-black border-b md:hover:bg-transparent md:border-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
        </li>
        <li>
            <a href="#" class="text-2xl block py-2 pr-8 pl-3 text-black border-b md:hover:bg-transparent md:border-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
        </li>
    @endauth
@endsection
@section("content")
    <h1 class="text-8xl text-center">Esta es la seccion principal.</h1>
    <h2 class="text-xl text-center">Registrate para acceder a todos nuestros contenidos.</h2>
    <div class="flex justify-center mt-10 h-96">
        <img src="{{asset("images/productos.png")}}" alt="productos">
    </div>
@endsection

