<x-app-layout title="Contact - Details">
    <div class="contact-title">
        <h1>{{$contact->name}} - Details</h1>
        <a href="{{ route('contacts.index') }}" class="btn-back">Back</a>
    </div>
    <div calss="contact-details">
        <a href="{{route('contacts.edit', $contact->id)}}" class= "btn-edit">Editar</a>
        <ul>
            <li>
                <h3>Contact</h3>
                <span>{{$contact->contact}}</span>
            </li>
            <li>
                <h3>E-mail</h3>
                <span>{{$contact->email}}</span>
            </li>
        </ul>
    </div>
</x-app-layout>