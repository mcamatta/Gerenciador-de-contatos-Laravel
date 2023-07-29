<x-app-layout title="Contact - Create">
    
    <form action="{{route('contacts.store')}}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name">
        <label for="contact">Contact</label>
        <input type="text" name="contact">
        <label for="name">E-mail</label>
        <input type="email" name="email">
        <button type="submit">Send</button>
    </form>
</x-app-layout>