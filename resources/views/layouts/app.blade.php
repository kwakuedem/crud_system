<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Crud</title>
</head>

<body class="bg-gray-200 h-svh w-full m-0 p-0">


    <div class="flex h-full">
        <div class="p-4 bg-black h-full w-[15%]">
            <div class="h-[20%] bg-white">

            </div>
            <ul class="flex flex-col gap-8 pt-8">
                <div><a class="text-white font-bold text-lg " href="{{ route('dashboard') }}">Dashboard</a>
                </div>
                <div> <a class="text-white font-bold text-lg " href="{{ route('product') }}">Products</a></div>
                <div><a class="text-white font-bold text-lg " href="{{ route('create') }}">Create Product</a>
                </div>
                <div><a class="text-white font-bold text-lg " href="">Categories</a></div>
            </ul>
        </div>

        <div class="content w-[85%]">
            <div class="bg-pink-400 p-4">
                <div class="flex gap-4 justify-end">
                    @auth
                        <span class="font-bold text-white">{{ Auth::user()->name }}</span>
                    @else
                        <span class="font-bold text-white">Edem Kwaku</span>
                    @endauth


                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="ring-1 ring-orange-300 px-2 rounded-sm bg-pink-800 text-white" type="submit"
                            class="">Logout</button>
                    </form>
                </div>
            </div>
            @yield('content')
        </div>

    </div>

</body>

</html>
