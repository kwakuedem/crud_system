@extends('layouts.auth')

@section('content')
    <div class="mt-[10%]">
        <form class="w-[90%] md:w-[30%] 2xl:w-[20%] m-auto py-6 bg-white rounded-md ring-1 ring-blue-200 shadow-lg"
            action="{{ route('login') }}" method="post">
            <h2 class="md:text-2xl font-bold px-4">User Login</h2>
            @csrf
            <div class="w-full p-4">
                <input class="w-full p-2 border-2 border-blue-200 rounded-md" type="text" name="username"
                    placeholder="Username" required>
            </div>
            <div class=" w-full p-4">
                <input class="w-full p-2 border-2 border-blue-200 rounded-md" type="password" name="password"
                    placeholder="**********" required>
            </div>
            <div class="p-4">
                <input class="p-3 bg-blue-700 font-bold w-full rounded-md text-white hover:bg-blue-500" type="submit"
                    value="Login">
            </div>
        </form>
    </div>
@endsection
