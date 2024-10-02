<x-layout>
    <x-page-heading>Register</x-page-heading>

    <x-form method="POST" action="/register" fileUpload='true'>

        <section id="user">
            <x-form.input name="name" type='text' required>
                Name
            </x-form.input>
            <x-form.input name="email" type='email' placeholder='example@email.com' required>
                Email
            </x-form.input>
            <x-form.input name="password" type='password' required>
                Password
            </x-form.input>
            <x-form.input name="password_confirmation" type='password' required>
                Confirm password
            </x-form.input>
        </section>

        <x-form.divider />

        <section id="employer">
            <x-form.input name="employer" type='text' required>
                Employer Name
            </x-form.input-item>
            <x-form.input name="logo" type='file' required>
                Employer Logo
            </x-form.input>
        </section>

        <x-form.button>Create Account</x-form.button>
    </x-form>
</x-layout>