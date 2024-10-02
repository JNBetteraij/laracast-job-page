@props([
    'method' => 'POST',
    'action',
    'fileData' => false,
])

<form
    method={{ $method !== 'GET' ? 'POST' : 'GET' }}
    action={{ $action }}
    {{ $fileData ? 'enctype=multipart/form-data' : '' }}  
    {{ $attributes->except(['method', 'action'])
        ->merge(["class" => "max-w-2xl mx-auto space-y-6"]) }}
>
    @csrf
    @method($method)

    {{ $slot }}
</form>
