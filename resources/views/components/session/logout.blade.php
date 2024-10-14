<form method="POST" action="/logout">
    @csrf
    @method('DELETE')

    <button>Log Out</button>
</form>