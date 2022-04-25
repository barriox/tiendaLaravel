
@extends("layout")
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
    <div class="bg-amber-200 ml-12 rounded-lg">
        <table class="w-full border-collapse border-black rounded-lg border-4 text-center">
            <tr>
                <th class="border-black border-4">Nombre</th>
                <th class="border-black border-4">Precio</th>
            </tr>
            @foreach($products as $product)
                <tr class="border border-black">
                    <td class="border border-black">{{$product->cod}}</td>
                    <td class="border border-black">{{$product->PVP}}</td>
                </tr>
            @endforeach
        </table>
        <div class="mt-8 w-auto items-center">
            {{$products->links()}}
        </div>
    </div>
 @endsection
