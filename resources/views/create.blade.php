@extends('layouts.app')

@section('content')
    <h1>Create User</h1>

    <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required>

        <select name="roles[]" multiple>
            @foreach($roles as $role)
                <option value="{{ $role->id }}">{{ $role->name }}</option>
            @endforeach
        </select>

        <button type="submit">Create User</button>
    </form>
@endsection
