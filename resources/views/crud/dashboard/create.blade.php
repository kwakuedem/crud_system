@extends('layouts.app')

@section('content')
    <div class="mt-[2%] ">
        @if (session('success'))
            <div class=" bg-green-400 text-white font-bold p-2">{{ session('success') }}</div>
        @endif
        <form class="w-[50%] m-auto py-6 bg-white" action="{{ route('store') }}" method="post">
            <h2 class="text-2xl font-bold p-4">Create Product</h2>
            @csrf
            <div class="w-full p-4">
                <input class="w-full p-3 border-2 border-blue-200 rounded-md" type="text" name="name"
                    placeholder="Product Name" required>
            </div>
            <div class=" w-full p-4">
                <input class="w-full p-3 border-2 border-blue-200 rounded-md" type="text" name="description"
                    placeholder="Product Description" value="{{ old('description') }}" required>
            </div>

            <div class="w-full p-4">
                <input class="w-full p-3 border-2 border-blue-200 rounded-md" type="number" name="price"
                    placeholder="Product Price" required>
            </div>
            <div class=" w-full p-4">
                <input class="w-full p-3 border-2 border-blue-200 rounded-md" type="number" name="quantity"
                    placeholder="Product Quantity" required>
            </div>

            <div class="p-4">
                <input class="p-3 bg-blue-700 font-bold w-full rounded-md text-white hover:bg-blue-500" type="submit"
                    value="Create Product">
            </div>
        </form>
    </div>
@endsection
