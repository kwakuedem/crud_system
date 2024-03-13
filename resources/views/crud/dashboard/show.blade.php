@extends('layouts.app')

@section('content')
    <div class="w-[50%] m-auto mt-7">
        <h2 class="text-lg font-bold">Product Details</h2>

        <div class="my-7">
            <p class="p-2"><strong>Name : </strong>{{ $product->name }}</p>
            <p class="p-2"><strong>Description : </strong>{{ $product->description }}</p>
            <p class="p-2"><strong>Price : </strong>{{ $product->price }}</p>
            <p class="p-2"><strong>Quantity : </strong>{{ $product->quantity }}</p>
        </div>
        <div class="flex gap-14 p-2">
            <a class=" underline-offset-0 ring-1 ring-gray-500 px-4 rounded-md hover:bg-gray-600 hover:text-white"
                href="{{ route('edit', ['product' => $product->id]) }}">Edit</a>
            <form action="{{ 'delete', $product->id }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="text-red-600 ring-1 ring-red-500 px-4 rounded-md hover:bg-red-500 hover:text-white">Delete</button>
            </form>
        </div>
        {{-- <p>{{ $products->links() }}</p> --}}

    </div>
@endsection
