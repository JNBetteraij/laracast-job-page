@props([
    'method' => 'POST',
    'action',
    'fileUpload' => false,
])

<form
    method="{{ $method !== 'GET' ? 'POST' : 'GET' }}"
    action="{{ $action }}"
    @if ($fileUpload)
        {{ 'enctype="multipart/form-data"' }}  
    @endif
    {{ $attributes->except(['method', 'action'])
        ->merge(["class" => "max-w-2xl mx-auto space-y-6"]) }}
>
    @csrf
    @method($method)

    {{ $slot }}
</form>
