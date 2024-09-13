<form {{$attributes}}>
  @csrf
  @if ($attributes->get('method') == 'PATCH')
    @method('PATCH')
  @endif
  <div class="space-y-12">

    {{$slot}}

    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
      <x-input 
      label="Title" 
      type="text" 
      name="title" 
      placeholder="Enter the title" 
      id="title" />
    </div>

    <x-input 
      label="Salary" 
      type="text" 
      name="salary" 
      placeholder="$560000" 
      id="salary" />
  </div>

  <div>
    @if($errors->any())

    <ul>
      @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
    </ul>

  @endif
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
    <button type="submit"
      class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
  </div>

  </div>
</form>