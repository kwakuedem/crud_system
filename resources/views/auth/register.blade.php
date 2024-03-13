@extends('layouts.auth')

@section('content')
    <div class="mt-[2%] 2xl:mt-[10%]">
        <form
            class="w-[90%] md:w-[70%]  lg:w-[30%] 2xl:w-[20%] m-auto py-6 bg-white shadow-lg rounded-md ring-1 ring-blue-200"
            action="{{ route('register') }}" method="post">
            <h2 class="md:text-2xl font-bold px-4 ">User Registeration</h2>
            @csrf
            <div class="w-full p-3">
                <input class="w-full p-3 border-2 border-blue-200 rounded-md" type="text" value="{{ old('fullname') }}"
                    autocomplete="off" name="name" placeholder="Fullname" required>
            </div>
            <div class=" w-full p-3">
                <input class="w-full p-3 border-2 border-blue-200 rounded-md" type="text" autocomplete="off"
                    name="username" placeholder="Username" value="{{ old('username') }}" required>
            </div>

            <div class="w-full p-3">
                <input class="w-full p-3 border-2 border-blue-200 rounded-md" type="email" value="{{ old('email') }}"
                    autocomplete="off" name="email" placeholder="Email" required>
            </div>
            <div class=" w-full p-3">
                <input class="w-full p-3 border-2 border-blue-200 rounded-md" type="password" autocomplete="off"
                    name="password" placeholder="Enter Password" required>
            </div>

            <div class=" w-full p-3">
                <input class="w-full p-3 border-2 border-blue-200 rounded-md" type="password" autocomplete="off"
                    name="password_confirmation" placeholder="password agail" required>
            </div>
            <div class="p-4">
                <input class="p-3 bg-blue-700 font-bold w-full rounded-md text-white hover:bg-blue-500" type="submit"
                    value="Register">
            </div>
        </form>
    </div>
@endsection
