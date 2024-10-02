@props(['for'])

@error($for)
    <div {{ $attributes->merge(['class' => 'text-sm text-red-500 mt-1']) }}>
        {{ $message }}
    </div>
@enderror
