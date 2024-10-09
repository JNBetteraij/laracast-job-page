<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-form method="POST" action="/register" fileData>

        <x-form.input name="title" type='text' required>
            Title
        </x-form.input>
        <x-form.input name="salary" type='text' required>
            Salary
        </x-form.input>

        <x-form.select label='Schedule' name="schedule" required>
            <option>Part Time</option>
            <option>Full Time</option>
        </x-form.select>
        <x-form.input name="location" type='text' required>
            Location
        </x-form.input>
        <x-form.input name="url" type='text' required>
            URL
        </x-form.input>

    <x-form.divider />

        <x-form.input name="tags" type='text' required>
            Tags (comma seperated)
        </x-form.input>

        <x-form.button>Publish Job</x-form.button>
    </x-form>
</x-layout>