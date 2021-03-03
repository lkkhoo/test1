<!DOCTYPE html>
    <head>
        <title>Make-It-All</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="bg-gray-200">
        <nav class="flex justify-between flex-wrap bg-white p-6">
            <ul class="flex items-center">
                <li class="font-semibold text-xl tracking-tight">
                    <a href="" class="p-3">Make-It-All</a>
                </li>
                <li>
                    <a href="" class="p-3">Home</a>
                </li>
                <li>
                    <a href="" class="p-3">Dashboard</a>
                </li>
                <li>
                    <a href="" class="p-3">Problems</a>
                </li>
            </ul>

            <ul class="flex items-center">
                <li>
                    <a href="" class="p-3">Name</a>
                </li>
                <li>
                    <form action="{{route('logout')}}" method="post" class="p-3 inline">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </nav>
        @yield('content')
    </body>
</html>
