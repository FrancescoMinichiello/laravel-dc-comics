@extends('layouts.app')

@section('page-title', 'New employee created!')

@section('main-content')
    <div class="container-fluid my-5">
        <div class="col d-flex bg-primary align-items-center p-4 justify-content-center text-white rounded-top-5">
            <h2 class="m-0">Informazioni su:</h2>
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
                                <a href="#"><button class="bg-warning p-2 rounded-2 fw-bold">Edit</button></a>
                                <a href="#"><button class="bg-danger p-2 rounded-2 fw-bold">Delete</button></a>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
