@props(['name', 'test' => 'password', 'type' => 'text', 'value' => ''])

@php
    $defaults = [
        'id' => $name,
        'name' => $name,
        'type' => $type,
        'class' =>
            'rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full disabled:pointer-events-none disabled:opacity-50',
        'value' => old($name) ?? $value,
    ];
@endphp

<x-form.item :$name :label='$slot'>
    <div class="relative">
        <input {{ $attributes->merge($defaults) }}>
        @if ($type == 'password')
            <label class='absolute inset-y-0 end-0 flex items-center px-5 cursor-pointer'>
                <input type="checkbox" value="" class="hidden peer" autocomplete="off"
                    onclick="toggleInputReadable(event)">
                <div class="block peer-checked:hidden">
                    <x-icon.eye.closed.slash />
                </div>
                <div class="hidden peer-checked:block">
                    <x-icon.eye.open />
                </div>
            </label>
            @once
                @push('scripts')
                    <script>
                        function toggleInputReadable(e) {
                            // Get the checkbox
                            let checkBox = e.target;
                            // Get the password input
                            let input = e.target.parentNode.parentNode.querySelector('input');
                            // set input type
                            input.type = checkBox.checked ? "text" : "password";
                        }
                    </script>
                @endpush
            @endonce
        @endif
    </div>
</x-form.item>
