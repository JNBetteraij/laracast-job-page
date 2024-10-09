<nav class="flex justify-between items-center py-4 border-b border-white/10">
    <div>
        <a href="/">
            <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
        </a>
    </div>

    <div class="space-x-6 font-bold">
        <a href="/">Jobs</a>
        <a href="/">Careers</a>
        <a href="/">Salaries</a>
        <a href="/">Companies</a>
    </div>

    @auth
        <div class="space-x-2 font-bold">
            <a href="/job/create">Post a Job</a>
            <a href="/logout">Logout</a>
        </div>
    @endauth

    @guest
        <div class="space-x-2 font-bold">
            <a href="/login">Login</a>
            <a href="/register">Register</a>
        </div>
    @endguest
</nav>