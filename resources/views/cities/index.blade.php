<div><a href="/">Home</a></div>
<a href="{{ route('cities.create') }}">New City</a>


@if(session('message'))
    <div style="color:green;">{{ session('message') }}</div>
@endif


<table cellpadding="10" cellspacing="1" border="1">
    <thead>
        <tr>
            <td>No.</td>
            <td>Name</td>
            <td>department</td>
            <td>actions</td>

        </tr>
    </thead>
    <body>
@forelse($cities as $key => $city)
    <tr>
        <td>{{ $cities->firstItem() + $key }}.</td>
        <td>{{ $city->name }}</td>
      
        <td>
            {{ $city->department->name }}
        </td>
        <td>
            <a href="{{ route('cities.edit', $city) }}">Edit</a>

            <form action="{{ route('cities.edit', $city) }}" method="post">
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