<x-app-layout title="Contact - Create">
    <h1>New Contact</h1>
    <form action="{{route('contacts.store')}}" method="POST" class="contact-form">
        @csrf
        <div class="contact-content">
            <div class="contact-fields">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ old('name') }}">
                @error('name')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div class="contact-fields">
                <label for="contact">Contact</label>
                <input type="text" name="contact" value="{{ old('contact') }}"  min="9" max="9">
                @error('text')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div class="contact-fields">
                <label for="email">E-mail</label>
                <input type="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn-new">Send</button>
    </form>
</x-app-layout>