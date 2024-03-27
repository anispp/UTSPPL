@extends('dashboard.layouts.main')

@section('isi')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card shadow">
                <div class="card-header">
                    <h1 class="h3">Edit Data Contact</h1>
                </div>
                <div class="card-body">
                    <form action="/dashboard/contact/{{ $contact->id_contact }}" method="post">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="firstname" class="form-label">Firstname</label>
                            <input type="text" name="firstname" class="form-control" id="firstname" aria-describedby="firstnameHelp" required value="{{ old('firstname', $contact->firstname) }}">
                        </div>
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Lastname</label>
                            <input type="text" name="lastname" class="form-control" id="lastname" aria-describedby="lastnameHelp" required value="{{ old('lastname', $contact->lastname) }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" name="email" class="form-control" id="email" required value="{{ old('email', $contact->email) }}">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control" id="phone" required value="{{ old('phone', $contact->phone) }}">
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-primary me-md-2">Update</button>
                            <a href="/dashboard/contact" class="btn btn-outline-secondary">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
