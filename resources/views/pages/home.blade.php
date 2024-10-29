@extends('layouts.app')

@section('page-title', 'Homepage')

@section('main-content')
    <div class="container-fluid my-5">
        <div class="row bg-secondary p-4 text-white">
            <div class="col d-flex justify-content-between align-items-center">
                <h1>Lista dipendenti:</h1>
                <a href="#"><button class="btn btn-success p-4 fw-bold">AGGIUNGI UN DIPENENTE</button></a>
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
                            <th scope="col">Age</th>
                            <th scope="col">Nationality</th>
                            <th scope="col">Driving license</th>

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
                                <td>{{ $employee->age }}</td>
                                <td>{{ $employee->nationality }}</td>
                                <td>{{ $employee->driving_license ? 'YES' : 'NO' }}</td>
                            </tr>
                        </tbody>
                    @empty
                    @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection
