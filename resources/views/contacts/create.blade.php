<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
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


</body>
</html>