<x-layout>
    <x-slot:heading>
        <div class="flex justify-between items-center h-full w-full">
            <h1 class="text-xl font-bold text-stone-800">Jobs Listing</h1>

            <x-button href="jobs/create">
            Create jobs
            </x-button>
        </div>
    </x-slot:heading>



    <h1 class="text-stone-800 font-semibold text-xl mt-5">Welcome to Jobs page..!</h1>

    <ul class="mt-3 space-y-3 ">
        @foreach ($jobs as $job)
            <div>

            </div>
            <li class="text-stone-700 py-4 px-2 border-2 rounded-lg block">
                <div>
                    <p class="font-semibold text-lg text-blue-400">{{$job->employer->name}}</p>

                </div>
                <a href="/jobs/{{$job['id']}}" class="block">

                    A {{ $job['title'] }}: Gets pay as: {{ $job['salary'] }}
                </a>
            </li>
        @endforeach

        {{$jobs->links()}}
    </ul>

    
   
</x-layout>