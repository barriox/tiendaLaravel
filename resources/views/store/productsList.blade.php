
@extends("layout")

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
    {{-- <x-ancla ref="{{route('families.index')}}">Familias</x-ancla>--}}
 @endsection
