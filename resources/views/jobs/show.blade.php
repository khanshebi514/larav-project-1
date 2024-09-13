<x-job :job='$job'>
    <div class="flex gap-5 mt-10">
        <x-button href="{{$job->id}}/edit">
            Edit
        </x-button>

        <button type="submit" form="delete-form" class="font-semibold text-sm text-red-600">
            Delete
</button>

        <form method="POST" action="/jobs/{{$job->id}}" class="hidden" id="delete-form">
            @csrf
            @method('DELETE')
        </form>
    </div>
</x-job>