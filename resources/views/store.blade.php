@extends('layout')

@section("nav")
    <li>
        <a href="/store" class="text-2xl block py-2 pr-8 text-black rounded md:bg-transparent dark:text-white " aria-current="page">Home</a>
    </li>
    <li>
        <a href="{{route('products.index')}}" class="text-2xl block py-2 pr-8 pl-3 text-black border-b md:hover:bg-transparent md:border-0  dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Products</a>
    </li>
    <li>
        <a href="#" class="text-2xl block py-2 pr-8 pl-3 text-black border-b md:hover:bg-transparent md:border-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
    </li>
    <li>
        <a href="#" class="text-2xl block py-2 pr-8 pl-3 text-black border-b md:hover:bg-transparent md:border-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
    </li>
@endsection
@section("content")
        <h1 class="text-8xl">Esta es la seccion principal de la tienda</h1>
@endsection
