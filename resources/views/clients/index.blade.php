<div><a href="/">Home</a></div>
<a href="{{ route('clients.create') }}">New Client</a>


@if(session('message'))
    <div style="color:green;">{{ session('message') }}</div>
@endif


<table cellpadding="10" cellspacing="1" border="1">
    <thead>
        <tr>
            
            <td>No.</td>
            <td>Name</td>
            <td>Identification</td>
            <td>Phone</td>
            <td>Address</td>
            <td>City</td>
            <td>Action</td>
        </tr>
    </thead>
    <body>
@forelse($clients as $key => $client)
    <tr>
        <td>{{ $clients->firstItem() + $key }}.</td>
        <td>{{ $client->name }}</td>
        <td>{{ $client->identification}}</td>
        <td>{{ $client->phone}}</td>
        <td>{{ $client->address}}</td>
        <td>
            {{ $client->city->name }}
        </td>
        <td>
            <a href="{{ route('clients.edit', $client) }}">Edit</a>

            <form action="{{ route('clients.edit', $client) }}" method="post">
                @csrf
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="5"> No data found in table</td>
    </tr>
@endforelse
</body>
</table>


