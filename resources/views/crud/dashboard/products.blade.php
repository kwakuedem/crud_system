@extends('layouts.app')

@section('content')
    <div class="w-[90%] m-auto py-7">
        <h2 class="font-bold text-lg uppercase py-4 underline">Products</h2>

        @if (count($products) > 0)
            <div class="flex justify-between py-3">
                <select name="" id="" class="px-4 rounded ">
                    <option value="">All</option>
                    <option value="">Name</option>
                    <option value="">Price</option>
                    <option value="">Quantity</option>
                </select>

                <form action="">
                    @csrf
                    <div class="rounded-m bg-white">
                        <input type="text" name="name" placeholder="search product"
                            class="p-2 rounded-md outline-none ">
                        <button class="ring-1 ring-blue-400 p-2 rounded-md bg-blue-500 text-white m-0"
                            type="submit">Search</button>
                    </div>
                </form>
                <a class="bg-blue-500 text-white font-bold px-4 py-2 rounded-md" href="{{ route('create') }}">Add
                    Product</a>
            </div>
            <table class="w-full">
                <thead>
                    <tr>
                        <th class="border text-left p-2 bg-blue-400 text-white">ID#</th>
                        <th class="border text-left p-2 bg-blue-400 text-white">Name</th>
                        <th class="border text-left p-2 bg-blue-400 text-white">Description</th>
                        <th class="border text-left p-2 bg-blue-400 text-white">Price</th>
                        <th class="border text-left p-2 bg-blue-400 text-white">Quantity</th>
                        <th class="border text-left p-2 bg-blue-400 text-white">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($products as $product)
                        <tr class="ring-1 ring-gray-600">
                            <td class="border text-left p-2">{{ $product->id }}</td>
                            <td class="border text-left p-2">{{ $product->name }}</td>
                            <td class="border text-left p-2">{{ $product->description }}</td>
                            <td class="border text-left p-2">{{ $product->price }}</td>
                            <td class="border text-left p-2">{{ $product->quantity }}</td>
                            <td class="flex gap-3">
                                <a class=" underline-offset-0" href="{{ route('show', $product->id) }}">View</a>
                                <a class=" underline-offset-0"
                                    href="{{ route('edit', ['product' => $product->id]) }}">Edit</a>
                                <form action="{{ route('delete', $product->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <table>
        @endif


    </div>
@endsection
