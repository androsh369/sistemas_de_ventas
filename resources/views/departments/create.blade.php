<div style="margin-bottom: 1em;">
    <a href="{{ route('departments.index') }}">Department List</a>
</div>

<h1>Create Department</h1>


@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif


<form action="{{ route('departments.create') }}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter department">
        @error('name')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="description">Description</label>
        <input type="text" name="description" id="description" placeholder="Enter description">
        @error('description')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <button type="submit">submit</button>
    </div>
</form>