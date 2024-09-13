<x-layout>
    <x-slot:heading>
        Home page
    </x-slot:heading>
    

    <div class="">
    <h1>Welcome to Home page..!</h1>
    </div>
    <div class="bg-stone-300 border-2 border-black mt-10">
    <ul class="text-center py-3">

        @foreach ($posts as $post)
        <p>Post No:{{$post['id']}}</p>
            <h1 class="text-xl font-bold my-5">{{$post['title']}}</h1>
            <p>{{$post['body']}}</p>
        @endforeach
    </ul>
    </div>
    
</x-layout>