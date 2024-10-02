@props(['name', 'value' => ''])

@php
    $defaults = [
        'type' => 'checkbox',
        'id' => $name,
        'name' => $name,
        'value' => old($name) ?? $value,
    ];
    $class = 'r px-5 py-4 w-full'
@endphp

<x-form.item :$name>
    <div class ='{{ $class }}'>
        <input {{ $attributes($defaults) }}>
        <span class="pl-1">{{ $slot }}</span>
    </div>
</x-form.item>
