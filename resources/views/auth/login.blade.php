<x-app-layout title="Login">
    <div class="login-page">
        <div class="form">
            <h1>Login</h1>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <input type="email" name="email" value="{{ old('email') }}" placeholder="you@example.com">
                <input name="password" type="password" placeholder="Password">
                <button type="submit" class="btn-success">Log in</button>
                @error('email')
                    <p class="message">{{ $message }}</p>
                @enderror
            </form>
        </div>
    </div>
</x-app-layout>