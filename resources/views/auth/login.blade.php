<x-layout>
    <x-slot:heading>
        Login Form
    </x-slot:heading>
    <form method="POST" action="/login">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Please Enter your Detail to Login</h2>
            </div>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                <x-input label="Email" type="email" name="email" placeholder="abc@xyz.com" id="email" />

                <x-input label="password" type="password" name="password" placeholder="Enter Password" id="password" />
            </div>

            <div>
                @if($errors->any())

                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-600 font-semibold text-sm">{{$error}}</li>
                        @endforeach
                    </ul>

                @endif
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a class="text-sm font-semibold leading-6 text-gray-900" href="/">Cancel</a>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</button>
            </div>

        </div>
    </form>
</x-layout>