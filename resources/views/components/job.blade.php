<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h1 class="mt-5 text-lg font-bold">{{$job['title']}}</h1>
    <p class="mt-3 text-stone-600">Pay as :{{$job['salary']}}</p>

  
    {{$slot}}
    
</x-layout>