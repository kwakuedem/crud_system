@extends('layouts.app')

@section('content')
    <div class="w-[80%] m-auto py-7">
        <h2 class="font-bold uppercase text-lg">Dashboard</h2>


        <div class="grid grid-cols-3 gap-6 w-full py-10">
            <a href="{{ route('product') }}">
                <div class="rounded-md ring-1 ring-pink-400 py-14 flex justify-center">
                    <p class="font-bold text-lg">{{ $productCount }}</p>

                </div>
            </a>

            <a id="no" onclick="saySomeThing()" href="">
                <div class="rounded-md ring-1 ring-pink-400 py-14 flex justify-center">
                    <p class="font-bold text-lg">34</p>
                </div>
            </a>

            <a id="no" onclick="saySomeThing()" href="">
                <div class="rounded-md ring-1 ring-pink-400 py-14 flex justify-center">
                    <p class="font-bold text-lg">78</p>
                </div>
            </a>
        </div>

    </div>

    <script>
        function saySomeThing() {
            alert("This box is static for now")
        }
    </script>
@endsection
