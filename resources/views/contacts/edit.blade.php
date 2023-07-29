<x-app-layout title="Contact - Edit">
    <form action="{{route('contacts.update', $contact->id)}}" method="POST">
        @csrf
        @method('patch')
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ old('name', $contact->name) }}">
        
        <label for="contact">Contact</label>
        <input type="text" name="contact" value="{{ old('contact', $contact->contact) }}">
        
        <label for="email">E-mail</label>
        <input type="email" name="email" value="{{ old('email', $contact->email) }}">
        
        <button type="submit">Send</button>
    </form>
</x-app-layout>