@extends('layouts.app')

@section('page-title', 'Homepage')

@section('main-content')
    <div class="container-fluid my-5">
        <div class="row p-4">
            <div class="col d-flex justify-content-between align-items-center">
                <h3 class="bg-secondary p-3 text-white rounded-2">Lista dipendenti:</h3>
                <a href="/create"><button class="btn btn-success p-4 fw-bold">AGGIUNGI UN DIPENDENTE</button></a>
            </div>
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
                            <th scope="col">Driving license</th>
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
                                <td>{{ $employee->driving_license ? 'YES' : 'NO' }}</td>
                                <td>
                                    <a href="#"><button class="bg-warning p-2 rounded-2 fw-bold">Edit</button></a>
                                    <a href="#"><button class="bg-danger p-2 rounded-2 fw-bold">Delete</button></a>
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
