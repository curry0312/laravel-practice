@props(['active' => false, 'type' => 'a'])


@if($type === 'a')
    <a {{ $attributes }}  class="{{ 'active' ? 'bg-gray-900 text-white' : 'text-gray-300' }}" >
        {{$slot}}
    </a>
@else
    <button {{ $attributes }}  class="{{ 'active' ? 'bg-gray-900 text-white' : 'text-gray-300' }}" >
        {{$slot}}
    </button>
@endif
