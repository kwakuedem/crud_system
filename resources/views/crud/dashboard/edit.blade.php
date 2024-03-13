@extends('layouts.app')

@section('content')
    <div class="mt-[2%]">
        <form class="w-[50%] m-auto py-6 bg-blue-100" action="{{ route('update', $product->id) }}" method="post">
            <h2 class="text-2xl font-bold p-4">Edit Product</h2>
            @csrf
            <div class="w-full p-4">
                <input class="w-full p-3 border-2 border-blue-200 rounded-md" type="text" name="name"
                    placeholder="Product Name" required value="{{ $product->name }}">
            </div>
            <div class=" w-full p-4">
                <input class="w-full p-3 border-2 border-blue-200 rounded-md" type="text" name="description"
                    placeholder="Product Description" required value="{{ $product->description }}">
            </div>

            <div class="w-full p-4">
                <input class="w-full p-3 border-2 border-blue-200 rounded-md" type="number" name="price"
                    placeholder="Product Price" required value="{{ $product->price }}">
            </div>
            <div class=" w-full p-4">
                <input class="w-full p-3 border-2 border-blue-200 rounded-md" type="number" name="quantity"
                    placeholder="Product Quantity" required value="{{ $product->quantity }}">
            </div>

            <div class="p-4">
                <input class="p-3 bg-blue-700 font-bold w-full rounded-md text-white hover:bg-blue-500" type="submit"
                    value="Update Product">
            </div>
        </form>
    </div>
@endsection
