<x-app-layout title="Contact - Edit">
    <form action="{{route('contacts.update', $contact->id)}}" method="POST">
        @csrf
        @method('patch')
        <div>
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ old('name', $contact->name) }}">
            </div>
            @error('name')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <div>
                <label for="contact">Contact</label>
                <input type="text" name="contact" value="{{ old('contact', $contact->contact) }}"  min="9" max="9">
            </div>
            @error('text')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <div>
                <label for="email">E-mail</label>
                <input type="email" name="email" value="{{ old('email', $contact->email) }}">
            </div>
            @error('email')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Send</button>
    </form>
</x-app-layout>