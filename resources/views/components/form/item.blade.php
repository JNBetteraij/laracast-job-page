@props(['name', 'label' => null])

<div class="">
    @if($label!='')
        <x-form.label :for='$name'>{{ $label }}</x-form.label>
    @endif
    
    <div class="mt-1">
        {{ $slot }}
        <x-form.error :for='$name' />
    </div>
</div>
