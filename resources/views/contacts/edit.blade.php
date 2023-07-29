<x-app-layout title="Contact - Edit">
    <div class="contact-title">
        <h1>Edit Contact</h1>
        <a href="{{ route('contacts.show', $contact->id) }}" class="btn-back">Back</a>
    </div>
    <form action="{{route('contacts.update', $contact->id)}}" method="POST" class="contact-form">
        @csrf
        @method('patch')
        <div class="contact-content">
            <div class="contact-fields">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ old('name', $contact->name) }}">
                @error('name')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
    
            <div class="contact-fields">
                <label for="contact">Contact</label>
                <input type="text" name="contact" value="{{ old('contact', $contact->contact) }}"  min="9" max="9">
                @error('text')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
    
            <div class="contact-fields">
                <label for="email">E-mail</label>
                <input type="email" name="email" value="{{ old('email', $contact->email) }}">
                @error('email')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
        </div>
    
        <button type="submit" class="btn-new">Send</button>
    </form>
</x-app-layout>