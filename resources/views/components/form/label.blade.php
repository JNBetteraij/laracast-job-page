@props(['for'])

<div class="inline-flex items-center gap-x-2">
    <x-bullet />
    <label class="font-bold" :for>{{ $slot }}</label>
</div>
