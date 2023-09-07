<div style="margin-bottom: 1em;">
    <a href="{{ route('employees.index') }}">Employee List</a>
</div>

<h1>Edit Employee</h1>


@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif


<form action="{{ route('employees.edit', $employee) }}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter employee" value="{{ $employee->name }}">
        @error('name')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="description">Description</label>
        <input type="text" name="description" id="description" placeholder="Enter description"
               value="{{ $employee->description }}">
        @error('Description')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <button type="submit">submit</button>
    </div>
</form>