<x-layout>
    <x-slot:heading>
        Create Job
        </x-slot>
        <x-JobCreateForm method="POST" action="/jobs">

            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create a New Job</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be
                    careful what you
                    share.</p>

            </div>
        </x-JobCreateForm>
</x-layout>