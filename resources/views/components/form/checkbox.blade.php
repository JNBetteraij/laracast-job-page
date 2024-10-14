@props(['name', 'value' => ''])

@php
    $defaults = [
        'type' => 'checkbox',
        'id' => $name,
        'name' => $name,
        'value' => old($name) ?? $value,
    ];
    $class = 'rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full disabled:pointer-events-none disabled:opacity-50'
@endphp

<x-form.item :$name :label='$slot'>
    <div class ='{{ $class }}'>
        <input {{ $attributes($defaults) }}>
        <span class="pl-1">{{ $slot }}</span>
    </div>
</x-form.item>
