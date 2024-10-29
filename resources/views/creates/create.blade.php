@extends('layouts.app')

@section('main-content')
    <div class="container">

        <form method="" class="container py-4 mt-1 border border-secondary rounded">
            <h2 class="bg-primary text-white p-2 rounded-3 fw-semibold d-flex justify-content-center">Crea un nuovo
                dipendente</h2>
            <div class="form-group">
                <label class="my-3" for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Insert name" name="name" required>
            </div>
            <div class="form-group">
                <label class="my-3" for="last_name">Last name</label>
                <input type="text" class="form-control" id="last_name" placeholder="Insert last name" name="last_name"
                    required>
            </div>
            <div class="form-group">
                <label class="my-3" for="address">Address</label>
                <input type="text" class="form-control" id="address" placeholder="Insert address" name="address"
                    required>
            </div>
            <div class="form-group">
                <label class="my-3" for="phone_number">Phone number</label>
                <input type="number" class="form-control" id="phone_number" placeholder="Insert phone number"
                    name="phone_number" required>
            </div>
            <div class="form-group">
                <label class="my-3" for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Insert email" name="email"
                    required>
            </div>
            <div class="form-group">
                <label class="my-3" for="Age">Age</label>
                <input type="number" class="form-control" id="age" placeholder="Insert age" name="age"
                    min="18" max="60" required>
            </div>
            <div class="form-group">
                <label class="my-3" for="Nationality">Nationality</label>
                <input type="text" class="form-control" id="nationality" placeholder="Insert nationality"
                    name="nationality" required>
            </div>
            <div class="d-flex gap-4">
                <label class="my-3" for="phone_number">Driving license?</label>

                <div class="form-check my-3">
                    <input class="form-check-input" type="radio" name="driving_license" id="driving_license_yes"
                        value="yes" checked>
                    <label class="form-check-label" for="driving_license_yes">
                        Yes
                    </label>
                </div>
                <div class="form-check my-3">
                    <input class="form-check-input" type="radio" name="driving_license" id="driving_license_no"
                        value="no" checked>
                    <label class="form-check-label" for="driving_license_no">
                        No
                    </label>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button class="bg-success p-3 rounded-2 mt-5 fw-bold text-white" type="submit">SALVA NUOVO
                    DIPENDENTE</button>
            </div>
        </form>
    </div>
@endsection
