<x-app-layout title="Contact - Details">
    <h1>{{$contact->name}} - Details</h1>
    <a href="{{route('contacts.edit', $contact->id)}}">Editar</a>
    <div>
        Contact: {{$contact->contact}}
        E-mail: {{$contact->email}}
        Created at: {{$contact->created_at}}
    </div>
</x-app-layout>