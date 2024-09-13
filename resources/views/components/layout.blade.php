<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
</head>

<body>
    <header class="bg-stone-600 text-white w-full flex justify-around items-center h-12">
        <div class="logo text-xl font-bold">Laravel</div>
        <nav>
            <ul class="flex justify-center items-center gap-5">
                <x-nav-link :active="request()->is('/')" href="/">Home</x-nav-link>
                <x-nav-link :active="request()->is('about')" href="about">About</x-nav-link>
                <x-nav-link :active="request()->is('contact')" href="contact">Contact us</x-nav-link>
                <x-nav-link :active="request()->is('jobs')" href="jobs">Jobs</x-nav-link>
            </ul>
        </nav>
        <div class="flex justify-center gap-5 items-center">
            
            @guest()
            <x-nav-link :active="request()->is('login')" href="login" class="bg-green-400">Login</x-nav-link>
            <x-nav-link :active="request()->is('register')" href="register">Register</x-nav-link>
            @endguest

            @auth()
            <form method="POST" action="/logout">
                @csrf
            <button type="submit" class="bg-stone-700 text-white px-4 py-2 rounded-lg hover:bg-red-600">Logout</button>
            </form>
            @endauth

        </div>
    </header>
    <div class="w-full h-16 bg-white shadow-lg ">
        <div class="max-w-[1200px] m-auto h-full">
            {{$heading}}
        </div>

    </div>
    <div class="max-w-[1200px] m-auto">
        {{$slot}}
    </div>
</body>

</html>