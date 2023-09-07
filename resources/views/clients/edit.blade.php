<div style="margin-bottom: 1em;">
    <a href="{{ route('clients.index') }}">Client List</a>
</div>

<h1>Edit Client</h1>


@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif


<form action="{{ route('clients.edit', $client) }}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter city" value="{{ $client->name }}">
        @error('name')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>

    <div style="margin-bottom: 1em;">
        <label for="identification">Identification</label>
        <input type="text" name="identification" id="identification" placeholder="Enter identification" value="{{ $client->identification }}">
        @error('identification')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>

    <div style="margin-bottom: 1em;">
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" placeholder="Enter phone" value="{{ $client->phone }}">
        @error('phone')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="address">Address</label>
        <input type="text" name="address" id="address" placeholder="Enter address" value="{{ $client->address }}">
        @error('address')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    
    <div style="margin-bottom: 1em;">
        <label for="city_id">City</label>
        <select name="city_id" id="city_id">
            <option value="">Select</option>
            @foreach($cities as $city)
                <option
                    @if ($city->id === (int)$client->city_id)
                        selected
                    @endif
                    value="{{ $city->id }}">{{ $city->name}}</option>
            @endforeach
        </select>
        @error('city_id')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <button type="submit">submit</button>
    </div>
</form>
