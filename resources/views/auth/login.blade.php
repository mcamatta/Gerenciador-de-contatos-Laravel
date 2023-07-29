<form action="{{ route('login') }}" method="POST">
    @csrf
    @error('email')
        {{ $message }}
    @enderror
    
    <div class="flex flex-col">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="you@example.com">
    </div>

    <div class="flex flex-col mt-4">
        <label for="password">Senha</label>
        <input name="password" id="password" type="password">
    </div>

    <button type="submit">Log in</button>

</form>