<x-layout>
    <x-page-heading>Log In</x-page-heading>

    <x-form method="POST" action="/login">
        <x-form.input name="email" type="email">
            Email
        </x-form.input>
        <x-form.input name="password" type="password">
            Password
        </x-form.input> 
       
        <x-form.checkbox name="checkbox">Agree?</x-form.checkbox>

        <x-form.button>Log In</x-forms.button>
    </x-form>
</x-layout>
