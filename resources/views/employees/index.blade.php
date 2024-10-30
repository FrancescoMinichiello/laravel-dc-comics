@extends('layouts.app')

@section('page-title', 'Homepage')

@section('main-content')
    <div class="container-fluid my-5">
        <div class="col d-flex bg-primary align-items-center p-4 justify-content-center text-white rounded-top-5">
            <h1 class="m-0">Management for our employees |</h1>
            <h2 class="m-0 ps-3">Add a new employee, edit information or delete it. </h2>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Last name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone number</th>
                            <th scope="col">email</th>
                            <th scope="col">Age</th>
                            <th scope="col">Nationality</th>
                            <th scope="col">Actions</th>

                        </tr>
                    </thead>
                    @forelse ($employees as $employee)
                        <tbody>
                            <tr>
                                <th scope="row">{{ $employee->id }}</th>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->last_name }}</td>
                                <td>{{ $employee->address }}</td>
                                <td>{{ $employee->phone_number }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->age }}</td>
                                <td>{{ $employee->nationality }}</td>
                                <td>
                                    <a href="{{ route('employee.show', $employee->id) }}"><button
                                            class="bg-secondary p-2 rounded-2 fw-bold">Show</button></a>
                                    <a href="{{ route('employee.edit', $employee->id) }}"><button
                                            class="bg-warning p-2 rounded-2 fw-bold">Edit</button></a>
                                    <form class="d-inline" action="{{ route('employee.destroy', $employee->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#"><button
                                                class="bg-danger p-2 rounded-2 fw-bold">Delete</button></a>
                                    </form>
                                </td>

                            </tr>
                        </tbody>
                    @empty
                    @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection
