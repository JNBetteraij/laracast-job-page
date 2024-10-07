@props(['name', 'test' => 'password', 'type' => 'text', 'value' => ''])

@php
    $defaults = [
        'id' => $name,
        'name' => $name,
        'type' => $type,
        'class' => 'rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full disabled:pointer-events-none',
        'value' => old($name) ?? $value,
    ];
@endphp

{{-- <x-form.item :$name :label='$slot'>
    <input {{ $attributes->merge($defaults) }}>
</x-form.item> --}}

<x-form.item :$name :label='$slot'>
    <div class="relative">
        <input {{ $attributes->merge($defaults)->merge(['class' => 'disabled:opacity-50 ']) }}>
        @if ($type == 'password')
            <label class='absolute inset-y-0 end-0 flex items-center z-20 px-5 cursor-pointer'>
                <input type="checkbox" value="" class="hidden peer">
                <div class="block peer-checked:hidden">
                    <x-icon.eye.closed.slash />
                </div>
                <div class="hidden peer-checked:block">
                    <x-icon.eye.open />
                </div>
            </label>
        @endif
    </div>
</x-form.item>

