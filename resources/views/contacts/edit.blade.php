<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
</body>
</html>