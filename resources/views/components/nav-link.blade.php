@props(['active' => false , 'type' => 'a'])
{{-- //  request()->is('') && request()->is('/') --}}


@if($type === "a")

<a  class="rounded-md {{$active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}   px-3 py-2 text-sm font-medium  " 
    aria-current="{{ $active ? 'page' : 'false' }}"
    {{$attributes}}>
    {{$slot}}</a>

    @else
    <button  class="rounded-md {{$active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}   px-3 py-2 text-sm font-medium  " 
    aria-current="{{ $active ? 'page' : 'false' }}"
    {{$attributes}}>
    {{$slot}}</button>
    
@endif

{{-- <a  {{$attributes}}  >{{$slot}}</a> --}}
