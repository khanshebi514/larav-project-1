@props(['active' => false])

<li class="list-none text-white"><a class="{{$active ? 'bg-gray-700 p-2 rounded-md' : ' '}} decoration-none text-lg hover:border-b-2 hover:border-b-white" aria-current={{$active ? 'page' : 'false'}} {{$attributes}}>{{$slot}}</a></li>