@props(['name', 'value' => ''])

@php
    $defaults = [
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full',
    ];
    $value => old($name) ?? $value
@endphp

<x-form.item :name='$name' :label='$slot'>
    <textarea {{ $attributes($defaults) }} >
        {{ $value }}
    </textarea>
</x-form.item>


