<x-app-layout>
    <table>
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Contact</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td><a href="{{ route('contacts.show', $contact->id) }}">{{ $contact->name }}</a></td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->contact }}</td>
                    <td>
                        <form action="{{ route("contacts.destroy", $contact->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>